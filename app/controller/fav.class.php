<?php 
/*
* @link http://kodcloud.com/
* @author warlee | e-mail:kodcloud@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kodcloud.com/tools/license/license.txt
*/

class fav extends Controller{
	private $sql;
	function __construct(){
		parent::__construct();
		$this->sql=new FileCache(USER.'data/fav.php');
	}

	/**
	 * 获取收藏夹json
	 */
	public function get() {
		show_json($this->sql->get());
	}

	/**
	 * 添加
	 */
	public function add() {
		$name = $this->in['name'];
		$path = $this->in['path'];
		if($this->sql->get($name)){//已存在则自动重命名
			$index = 0;
			while ($this->sql->get($name.'('.$index.')')) {
				$index ++;
			}
			$name = $name.'('.$index.')';
		}
		$res=$this->sql->set(
			$name,
			array(
				'name' => $name,
				'path' => $path,
				'ext'  => $this->in['ext'],
				'type' => $this->in['type']
			)
		);
		show_json(LNG('success'));
	}

	/**
	 * 编辑
	 */
	public function edit() {
		$this->in['name'] = $this->in['name'];
		$this->in['path'] = $this->in['path'];
		$this->in['nameTo'] = $this->in['nameTo'];
		$newFav = $this->sql->get($this->in['name']);
		if(!isset($newFav['type'])){
			$newFav['type'] = 'folder';
		}
		//查找到一条记录，修改为该数组
		$toArray=array(
			'name'=>$this->in['nameTo'],
			'path'=>$this->in['pathTo'],
			'type'=>$newFav['type']
		);
		$this->sql->remove($this->in['name']);
		if($this->sql->set($this->in['nameTo'],$toArray)){
			show_json(LNG('success'));
		}
		show_json(LNG('error_repeat'),false);
	}

	/**
	 * 删除
	 */
	public function del() {
		$this->in['name'] = $this->in['name'];
		if($this->sql->remove($this->in['name'])){
			show_json(LNG('success'));
		}
		show_json(LNG('error'),false);
	}
}
