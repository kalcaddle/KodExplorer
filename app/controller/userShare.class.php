<?php 
/*
* @link http://kodcloud.com/
* @author warlee | e-mail:kodcloud@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kodcloud.com/tools/license/license.txt
*/
class userShare extends Controller{
	private $sql;
	function __construct(){
		parent::__construct();
		$this->sql=new FileCache(USER.'data/share.php');
	}
	/**
	 * 获取
	 */
	public function get() {
		$list = $this->sql->get();
		foreach($list as $key=>&$val){
			//unset($val['sharePassword']);
		}
		return $list;
	}

	//检测该目录是否已被共享
	public function checkByPath(){
		$this->in['path'] = _DIR_CLEAR($this->in['path']);
		$shareInfo = $this->sql->get('path',$this->in['path']);
		if (!$shareInfo) {
			show_json('',false);//没有找到
		}else{
			show_json($shareInfo,true,$this->get());
		}
	}

	/**
	 * 编辑
	 */
	public function set(){
		if (!$this->in['name'] || !$this->in['path'] || !$this->in['type']){
		   show_json(LNG('data_not_full'),false);
		}
		$shareInfo = array(
			'mtime'			=> time(),//更新则记录最后时间
			'sid'			=> isset($this->in['sid'])?$this->in['sid']:'',
			'type'			=> $this->in['type'],
			'path'			=> _DIR_CLEAR($this->in['path']),
			'name'			=> $this->in['name'],
			'showName'		=> isset($this->in['showName'])?$this->in['showName']:$this->in['name'],
			'timeTo'		=> isset($this->in['timeTo'])?$this->in['timeTo']:'',
			'sharePassword' => isset($this->in['sharePassword'])?$this->in['sharePassword']:'',
			'codeRead'		=> isset($this->in['codeRead'])?$this->in['codeRead']:'',
			'canUpload'		=> isset($this->in['canUpload'])?$this->in['canUpload']:'',
			'notDownload'	=> isset($this->in['notDownload'])?$this->in['notDownload']:''
		);
		if(substr($shareInfo['path'],0,1) == '{'){//用户只能分享自己的目录；
			show_json(LNG('path_can_not_action'),false);
		}

		$name = $shareInfo['name'];
		$search = $this->sql->get('name',$name);
		$i = 0;
		while($i>200 || $search && $search['sid']!=$shareInfo['sid']){
			$name   = $shareInfo['name'].'('.$i.')';
			$search = $this->sql->get('name',$name);
			$i++;
		}
		if($i !=0){
			$shareInfo['name'] = $name;
		}

		//含有sid则为更新，否则为插入
		if (isset($this->in['sid']) && strlen($this->in['sid']) == 8) {
			$infoNew = $this->sql->get($this->in['sid']);			
			foreach ($shareInfo as $key=>$val) {//只更新指定key
				$infoNew[$key] = $val;
			}
			if($this->sql->set($this->in['sid'],$infoNew)){
				show_json($infoNew,true,$this->get());
			}
			show_json(LNG('error'),false);
		}else{//插入
			$shareList = $this->sql->get();
			$newId = rand_string(8);
			while (isset($shareList[$newId])) {
				$newId = rand_string(8);
			}
			$shareInfo['sid'] = $newId;
			if($this->sql->set($newId,$shareInfo)){
				show_json($shareInfo,true,$this->get());
			}
			show_json(LNG('error'),false);
		}
		show_json(LNG('error'),false);
	}

	/**
	 * 删除
	 */
	public function del() {
		$list = json_decode($this->in['dataArr'],true);
		foreach ($list as $val) {
			$this->sql->remove($val['path']);
		}
		show_json(LNG('success'),true,$this->get());
	}
}
