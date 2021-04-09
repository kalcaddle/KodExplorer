<?php 
// from elfinder;
class imageGdBMP{
	public static function load($filename){
		$fp = fopen($filename, "rb");
		if ($fp === false){
			return false;
		}
		$bmp = self::loadFromStream($fp);
		fclose($fp);
		return $bmp;
	}
	public static function loadFromStream($stream){
		$buf = fread($stream, 14); //2+4+2+2+4
		if ($buf === false){
			return false;
		}
		if ($buf[0] != 'B' || $buf[1] != 'M'){
			return false;
		}
		$bitmapHeader = unpack(
			"vtype/".
			"Vsize/".
			"vreserved1/".
			"vreserved2/".
			"Voffbits", $buf
		);
		return self::loadFromStreamAndFileHeader($stream, $bitmapHeader);
	}
	public static function loadFromStreamAndFileHeader($stream, array $bitmapHeader){
		if ($bitmapHeader["type"] != 0x4d42){
			return false;
		}
		$buf = fread($stream, 4);
		if ($buf === false){
			return false;
		}
		list(,$header_size) = unpack("V", $buf);
		if ($header_size == 12){
			$buf = fread($stream, $header_size - 4);
			if ($buf === false){
				return false;
			}
			extract(unpack(
				"vwidth/".
				"vheight/".
				"vplanes/".
				"vbit_count", $buf
			));
			$clr_used = $clr_important = $alpha_mask = $compression = 0;
			$red_mask   = 0x00ff0000;
			$green_mask = 0x0000ff00;
			$blue_mask  = 0x000000ff;
		} else if (124 < $header_size || $header_size < 40) {
			return false;
		} else {
			$buf = fread($stream, 36);
			if ($buf === false){
				return false;
			}
			extract(unpack(
				"Vwidth/".
				"Vheight/".
				"vplanes/".
				"vbit_count/".
				"Vcompression/".
				"Vsize_image/".
				"Vx_pels_per_meter/".
				"Vy_pels_per_meter/".
				"Vclr_used/".
				"Vclr_important", $buf
			));
			if ($width  & 0x80000000){ $width  = -(~$width  & 0xffffffff) - 1; }
			if ($height & 0x80000000){ $height = -(~$height & 0xffffffff) - 1; }
			if ($x_pels_per_meter & 0x80000000){ $x_pels_per_meter = -(~$x_pels_per_meter & 0xffffffff) - 1; }
			if ($y_pels_per_meter & 0x80000000){ $y_pels_per_meter = -(~$y_pels_per_meter & 0xffffffff) - 1; }
			if ($bitmapHeader["size"] != 0){
				$colorsize = $bit_count == 1 || $bit_count == 4 || $bit_count == 8 ? ($clr_used ? $clr_used : pow(2, $bit_count))<<2 : 0;
				$bodysize = $size_image ? $size_image : ((($width * $bit_count + 31) >> 3) & ~3) * abs($height);
				$calcsize = $bitmapHeader["size"] - $bodysize - $colorsize - 14;
				if ($header_size < $calcsize && 40 <= $header_size && $header_size <= 124){
					$header_size = $calcsize;
				}
			}
			if ($header_size - 40 > 0){
				$buf = fread($stream, $header_size - 40);
				if ($buf === false){
					return false;
				}
				extract(unpack(
					"Vred_mask/".
					"Vgreen_mask/".
					"Vblue_mask/".
					"Valpha_mask", $buf . str_repeat("\x00", 120)
				));
			} else {
				$alpha_mask = $red_mask = $green_mask = $blue_mask = 0;
			}
			if (
				($bit_count == 16 || $bit_count == 24 || $bit_count == 32)&&
				$compression == 0 &&
				$red_mask == 0 && $green_mask == 0 && $blue_mask == 0
			){
				switch($bit_count){
				case 16:
					$red_mask   = 0x7c00;
					$green_mask = 0x03e0;
					$blue_mask  = 0x001f;
					break;
				case 24:
				case 32:
					$red_mask   = 0x00ff0000;
					$green_mask = 0x0000ff00;
					$blue_mask  = 0x000000ff;
					break;
				}
			}
		}

		if (
			($width  == 0)||
			($height == 0)||
			($planes != 1)||
			(($alpha_mask & $red_mask  ) != 0)||
			(($alpha_mask & $green_mask) != 0)||
			(($alpha_mask & $blue_mask ) != 0)||
			(($red_mask   & $green_mask) != 0)||
			(($red_mask   & $blue_mask ) != 0)||
			(($green_mask & $blue_mask ) != 0)
		){
			return false;
		}
		if ($compression == 4 || $compression == 5){
			$buf = stream_get_contents($stream, $size_image);
			if ($buf === false){
				return false;
			}
			return imagecreatefromstring($buf);
		}
		$line_bytes = (($width * $bit_count + 31) >> 3) & ~3;
		$lines = abs($height);
		$y = $height > 0 ? $lines-1 : 0;
		$line_step = $height > 0 ? -1 : 1;
		if ($bit_count == 1 || $bit_count == 4 || $bit_count == 8){
			$img = imagecreate($width, $lines);
			$palette_size = $header_size == 12 ? 3 : 4;
			$colors = $clr_used ? $clr_used : pow(2, $bit_count);
			$palette = array();
			for($i = 0; $i < $colors; ++$i){
				$buf = fread($stream, $palette_size);
				if ($buf === false){
					imagedestroy($img);
					return false;
				}
				extract(unpack("Cb/Cg/Cr/Cx", $buf . "\x00"));
				$palette[] = imagecolorallocate($img, $r, $g, $b);
			}

			$shift_base = 8 - $bit_count;
			$mask = ((1 << $bit_count) - 1) << $shift_base;
			if ($compression == 1 || $compression == 2){
				$x = 0;
				$qrt_mod2 = $bit_count >> 2 & 1;
				for(;;){
					if ($x < -1 || $x > $width || $y < -1 || $y > $height){
						imagedestroy($img);
						return false;
					}
					$buf = fread($stream, 1);
					if ($buf === false){
						imagedestroy($img);
						return false;
					}
					switch($buf){
					case "\x00":
						$buf = fread($stream, 1);
						if ($buf === false){
							imagedestroy($img);
							return false;
						}
						switch($buf){
						case "\x00": //EOL
							$y += $line_step;
							$x = 0;
							break;
						case "\x01": //EOB
							$y = 0;
							$x = 0;
							break 3;
						case "\x02": //MOV
							$buf = fread($stream, 2);
							if ($buf === false){
								imagedestroy($img);
								return false;
							}
							list(,$xx, $yy) = unpack("C2", $buf);
							$x += $xx;
							$y += $yy * $line_step;
							break;
						default:
							list(,$pixels) = unpack("C", $buf);
							$bytes = ($pixels >> $qrt_mod2) + ($pixels & $qrt_mod2);
							$buf = fread($stream, ($bytes + 1) & ~1);
							if ($buf === false){
								imagedestroy($img);
								return false;
							}
							for ($i = 0, $pos = 0; $i < $pixels; ++$i, ++$x, $pos += $bit_count){
								list(,$c) = unpack("C", $buf[$pos >> 3]);
								$b = $pos & 0x07;
								imagesetpixel($img, $x, $y, $palette[($c & ($mask >> $b)) >> ($shift_base - $b)]);
							}
							break;
						}
						break;
					default:
						$buf2 = fread($stream, 1);
						if ($buf2 === false){
							imagedestroy($img);
							return false;
						}
						list(,$size, $c) = unpack("C2", $buf . $buf2);
						for($i = 0, $pos = 0; $i < $size; ++$i, ++$x, $pos += $bit_count){
							$b = $pos & 0x07;
							imagesetpixel($img, $x, $y, $palette[($c & ($mask >> $b)) >> ($shift_base - $b)]);
						}
						break;
					}
				}
			} else {
				for ($line = 0; $line < $lines; ++$line, $y += $line_step){
					$buf = fread($stream, $line_bytes);
					if ($buf === false){
						imagedestroy($img);
						return false;
					}

					$pos = 0;
					for ($x = 0; $x < $width; ++$x, $pos += $bit_count){
						list(,$c) = unpack("C", $buf[$pos >> 3]);
						$b = $pos & 0x7;
						imagesetpixel($img, $x, $y, $palette[($c & ($mask >> $b)) >> ($shift_base - $b)]);
					}
				}
			}
		} else {
			$img = imagecreatetruecolor($width, $lines);
			imagealphablending($img, false);
			if ($alpha_mask){
				imagesavealpha($img, true);
			}

			//x軸進行量
			$pixel_step = $bit_count >> 3;
			$alpha_max    = $alpha_mask ? 0x7f : 0x00;
			$alpha_mask_r = $alpha_mask ? 1/$alpha_mask : 1;
			$red_mask_r   = $red_mask   ? 1/$red_mask   : 1;
			$green_mask_r = $green_mask ? 1/$green_mask : 1;
			$blue_mask_r  = $blue_mask  ? 1/$blue_mask  : 1;

			for ($line = 0; $line < $lines; ++$line, $y += $line_step){
				$buf = fread($stream, $line_bytes);
				if ($buf === false){
					imagedestroy($img);
					return false;
				}
				$pos = 0;
				for ($x = 0; $x < $width; ++$x, $pos += $pixel_step){
					list(,$c) = unpack("V", substr($buf, $pos, $pixel_step). "\x00\x00");
					$a_masked = $c & $alpha_mask;
					$r_masked = $c & $red_mask;
					$g_masked = $c & $green_mask;
					$b_masked = $c & $blue_mask;
					$a = $alpha_max - ((($a_masked<<7) - $a_masked) * $alpha_mask_r);
					$r = (($r_masked<<8) - $r_masked) * $red_mask_r;
					$g = (($g_masked<<8) - $g_masked) * $green_mask_r;
					$b = (($b_masked<<8) - $b_masked) * $blue_mask_r;
					imagesetpixel($img, $x, $y, ($a<<24)|($r<<16)|($g<<8)|$b);
				}
			}
			imagealphablending($img, true);
		}
		return $img;
	}
}

