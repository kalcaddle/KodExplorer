<?php 

/**
 * 功能：图片处理
 * 基本参数：$srcFile,$echoType
 * 
 * eg：
 * $cm=new ImageThumb('1.jpg','file');
 * 
 * $cm->Distortion('dis_bei.jpg',150,200);	//生成固定宽高缩略图；
 * $cm->Prorate('pro_bei.jpg',150,200);		//等比缩略图；附带切割
 * $cm->Cut('cut_bei.jpg',150,200);			//等比缩略图；多出部分切割
 * $cm->BackFill('fill_bei.jpg',150,200);	//等比缩略图；多出部分填充
 *
 * $cm->imgRotate('out.jpg',90);			//旋转图片
 */
class ImageThumb {
	var $srcFile = '';	//原图
	var $imgData = '';	//图片信息
	var $echoType;		//输出图片类型，link--不保存为文件；file--保存为文件
	var $im = '';		//临时变量
	var $srcW = '';		//原图宽
	var $srcH = '';		//原图高  

	function __construct($srcFile, $echoType){
		$this->srcFile = $srcFile;
		$this->echoType = $echoType;
		$this->im = self::image($srcFile);
		if(!$this->im){
			return false;
		}

		$info = '';
		$this->imgData = GetImageSize($srcFile, $info);
		$this->srcW = imageSX($this->im);
		$this->srcH = imageSY($this->im);
		return $this;
	}
	public static function image($file){
		$info = '';
		$data = GetImageSize($file, $info);
		$img  = false;
		switch ($data[2]) {
			case IMAGETYPE_GIF:
				if (!function_exists('imagecreatefromgif')) {
					break;
				} 
				$img = imagecreatefromgif($file);
				break;
			case IMAGETYPE_JPEG:
				if (!function_exists('imagecreatefromjpeg')) {
					break;
				} 
				$img = imagecreatefromjpeg($file);
				break;
			case IMAGETYPE_PNG:
				if (!function_exists('imagecreatefrompng')) {
					break;
				}
				$img = imagecreatefrompng($file);
				imagesavealpha($img,true);
				break;
			case IMAGETYPE_BMP:
				$img = imagecreatefrombmp($file);
				break;
			default:break;
		}
		return $img;
	}

	public static function imageSize($file){
		$img = self::image($file);
		$result = false;
		if($img){
			$result = array('width'=>imageSX($img),"height"=>imageSY($img));
			imageDestroy($img);
		}
		return $result;
	}

	// 生成扭曲型缩图
	function distortion($toFile, $toW, $toH){
		$cImg = $this->creatImage($this->im, $toW, $toH, 0, 0, 0, 0, $this->srcW, $this->srcH);
		return $this->echoImage($cImg, $toFile);
	} 
	// 生成按比例缩放的缩图
	function prorate($toFile, $toW, $toH){
		$toWH = $toW / $toH;
		$srcWH = $this->srcW / $this->srcH;
		if ($toWH<=$srcWH) {
			$ftoW = $toW;
			$ftoH = $ftoW * ($this->srcH / $this->srcW);
		} else {
			$ftoH = $toH;
			$ftoW = $ftoH * ($this->srcW / $this->srcH);
		} 
		if ($this->srcW > $toW || $this->srcH > $toH) {
			$cImg = $this->creatImage($this->im, $ftoW, $ftoH, 0, 0, 0, 0, $this->srcW, $this->srcH);
			return $this->echoImage($cImg, $toFile);
		} else {
			$cImg = $this->creatImage($this->im, $this->srcW, $this->srcH, 0, 0, 0, 0, $this->srcW, $this->srcH);
			return $this->echoImage($cImg, $toFile);
		} 
	} 
	// 生成最小裁剪后的缩图
	function cut($toFile, $toW, $toH){
		$toWH = $toW / $toH;
		$srcWH = $this->srcW / $this->srcH;
		if ($toWH<=$srcWH) {
			$ctoH = $toH;
			$ctoW = $ctoH * ($this->srcW / $this->srcH);
		} else {
			$ctoW = $toW;
			$ctoH = $ctoW * ($this->srcH / $this->srcW);
		} 
		$allImg = $this->creatImage($this->im, $ctoW, $ctoH, 0, 0, 0, 0, $this->srcW, $this->srcH);
		$cImg = $this->creatImage($allImg, $toW, $toH, 0, 0, ($ctoW - $toW) / 2, ($ctoH - $toH) / 2, $toW, $toH);
		imageDestroy($allImg);
		return $this->echoImage($cImg, $toFile);		
	} 
	// 生成背景填充的缩图,默认用白色填充剩余空间，传入$isAlpha为真时用透明色填充
	function backFill($toFile, $toW, $toH,$isAlpha=false,$red=255, $green=255, $blue=255){
		$toWH = $toW / $toH;
		$srcWH = $this->srcW / $this->srcH;
		if ($toWH<=$srcWH) {
			$ftoW = $toW;
			$ftoH = $ftoW * ($this->srcH / $this->srcW);
		} else {
			$ftoH = $toH;
			$ftoW = $ftoH * ($this->srcW / $this->srcH);
		} 
		if (function_exists('imagecreatetruecolor')) {
			@$cImg = imageCreateTrueColor($toW, $toH);
			if (!$cImg) {
				$cImg = imageCreate($toW, $toH);
			} 
		} else {
			$cImg = imageCreate($toW, $toH);
		}

		$fromTop = ($toH - $ftoH)/2;//从正中间填充
		$backcolor = imagecolorallocate($cImg,$red,$green, $blue); //填充的背景颜色
		if ($isAlpha){//填充透明色
			$backcolor=imageColorTransparent($cImg,$backcolor);
			$fromTop = $toH - $ftoH;//从底部填充
		}		

		imageFilledRectangle($cImg, 0, 0, $toW, $toH, $backcolor);
		if ($this->srcW > $toW || $this->srcH > $toH) {
			$proImg = $this->creatImage($this->im, $ftoW, $ftoH, 0, 0, 0, 0, $this->srcW, $this->srcH);
			if ($ftoW < $toW) {
				imageCopy($cImg, $proImg, ($toW - $ftoW) / 2, 0, 0, 0, $ftoW, $ftoH);
			} else if ($ftoH < $toH) {
				imageCopy($cImg, $proImg, 0, $fromTop, 0, 0, $ftoW, $ftoH);
			} else {
				imageCopy($cImg, $proImg, 0, 0, 0, 0, $ftoW, $ftoH);
			} 
		} else {
			imageCopyMerge($cImg, $this->im, ($toW - $ftoW) / 2,$fromTop, 0, 0, $ftoW, $ftoH, 100);
		} 
		return $this->echoImage($cImg, $toFile);
	} 

	function creatImage($img, $creatW, $creatH, $dstX, $dstY, $srcX, $srcY, $srcImgW, $srcImgH){
		if (function_exists('imagecreatetruecolor')) {
			@$creatImg = ImageCreateTrueColor($creatW, $creatH);
			@imagealphablending($creatImg,false);//是不合并颜色,直接用$img图像颜色替换,包括透明色;
			@imagesavealpha($creatImg,true);//不要丢了$thumb图像的透明色;
			if ($creatImg){
				imageCopyResampled($creatImg, $img, $dstX, $dstY, $srcX, $srcY, $creatW, $creatH, $srcImgW, $srcImgH);
			}else {
				$creatImg = ImageCreate($creatW, $creatH);
				imageCopyResized($creatImg, $img, $dstX, $dstY, $srcX, $srcY, $creatW, $creatH, $srcImgW, $srcImgH);
			} 
		} else {
			$creatImg = ImageCreate($creatW, $creatH);
			imageCopyResized($creatImg, $img, $dstX, $dstY, $srcX, $srcY, $creatW, $creatH, $srcImgW, $srcImgH);
		} 
		return $creatImg;
	}


	// Rotate($toFile, 90);
	public function imgRotate($toFile,$degree) {
		if (!$this->im ||
			$degree % 360 === 0 || 
			!function_exists('imageRotate')) {
			return false;
		}
		$rotate  = imageRotate($this->im,360-$degree,0);
		$result  = false;
		switch ($this->imgData[2]) {
			case IMAGETYPE_GIF:
				$result = imagegif($rotate, $toFile);
				break;
			case IMAGETYPE_JPEG:
				$result = imagejpeg($rotate, $toFile,100);//压缩质量
				break;
			case IMAGETYPE_PNG:
				$result = imagePNG($rotate, $toFile);
				break;
			default:break;
		}
		imageDestroy($rotate);
		imageDestroy($this->im);
		return $result;
	}

	// 输出图片，link---只输出，不保存文件。file--保存为文件
	function echoImage($img, $toFile){
		if(!$img) return false;
		ob_get_clean();
		$result = false;
		switch ($this->echoType) {
			case 'link':$result = imagePNG($img);break;
			case 'file':$result = imagePNG($img, $toFile);break;
			//return ImageJpeg($img, $to_File);				
		}
		imageDestroy($img);
		imageDestroy($this->im);
		return $result;
	} 
}

if(!function_exists('imagecreatefrombmp')){
	function imagecreatefrombmp( $filename ){
		return imageGdBMP::load($filename);
	}
}

