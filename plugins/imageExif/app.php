<?php

class imageExifPlugin extends PluginBase{
	function __construct(){
		parent::__construct();

		//扩展缺失提示
		if( !function_exists('exif_read_data')){
			$this->appPackage();
			$this->packageData['configItem'] = array(
				"sep001" => '<div class="alert alert-danger m-30">'.LNG('imageExif.Config.missLib').'</div>',
			);
		}
	}
	public function regiest(){
		$this->hookRegiest(array(
			'user.commonJs.insert'  => 'imageExifPlugin.echoJs',
			'share.image'			=> 'imageExifPlugin.imageCheck',
			'explorer.image'		=> 'imageExifPlugin.imageCheck',
		));
	}
	public function echoJs($st,$act){
		if( !function_exists('exif_read_data')){
			return;
		}
		//$this->echoFile('static/main.js');
	}
	public function getExif(){
		$path = _DIR($this->in['path']);
		$exif = @exif_read_data($path);
		show_json($exif,!!$exif);
	}

	//根据Orientation 自动旋转图片
	//http://blog.csdn.net/ouyangtianhan/article/details/29825885
	//https://gxnotes.com/article/126807.html
	//https://zhuanlan.zhihu.com/p/25216999
	public function imageCheck(){
		if( !function_exists('exif_read_data')){
			return;
		}
		$path = _DIR($this->in['path']);
		$exif = @exif_read_data($path);
		if(!file_exists($path) || !$exif || !isset($exif['Orientation'])) return;
		if( $exif['Orientation']< 3) return;

		$img = ImageThumb::image($path);
		if(!$img) return;
		$ort = $exif['Orientation'];
		if($ort == 5 || $ort == 6){
			$img = imagerotate($img, 270, null);
		}
		if($ort == 3 || $ort == 4){
			$img = imagerotate($img, 180, null);
		}
		if($ort == 7 || $ort == 8){
			$img = imagerotate($img, 90, null);
		}
		if($ort == 4 || $ort == 5 || $ort == 7){
			imageflip($img,IMG_FLIP_HORIZONTAL);
		}
		$ext = get_path_ext($path);
		$imagefun = 'image'.($ext=='jpg'?'jpeg':$ext);
		$res = $imagefun($img, $path);
		imagedestroy($img);
		//show_json($exif,$res);
	}
}
