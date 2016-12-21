<?php 
/*
* @link http://www.kalcaddle.com/
* @author warlee | e-mail:kalcaddle@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kalcaddle.com/tools/licenses/license.txt
*/

class fav extends Controller{
	private $sql;
	function __construct(){
		parent::__construct();
		$this->sql=new fileCache(USER.'data/fav.php');
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
		show_json($this->L['success']);
	}

	/**
	 * 编辑
	 */
	public function edit() {
		$this->in['name'] = $this->in['name'];
		$this->in['path'] = $this->in['path'];
		$this->in['name_to'] = $this->in['name_to'];
		$new_fav = $this->sql->get($this->in['name']);
		if(!isset($new_fav['type'])){
			$new_fav['type'] = 'folder';
		}
		//查找到一条记录，修改为该数组
		$to_array=array(
			'name'=>$this->in['name_to'],
			'path'=>$this->in['path_to'],
			'type'=>$new_fav['type']
		);
		$this->sql->remove($this->in['name']);
		if($this->sql->set($this->in['name_to'],$to_array)){
			show_json($this->L['success']);
		}
		show_json($this->L['error_repeat'],false);
	}

	/**
	 * 删除
	 */
	public function del() {
		$this->in['name'] = $this->in['name'];
		if($this->sql->remove($this->in['name'])){
			show_json($this->L['success']);
		}
		show_json($this->L['error'],false);
	}
}
