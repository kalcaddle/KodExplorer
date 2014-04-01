<?php 
/*
* @link http://www.kalcaddle.com/
* @author warlee | e-mail:kalcaddle@qq.com
* @copyright warlee 2014.(Shanghai)Co.,Ltd
* @license http://kalcaddle.com/tools/licenses/license.txt
*/


/**
* 历史记录操作类
* 传入或者构造一个数组。形如:
* array(
* 	'history_num'=>20,	//队列节点总共个数
* 	'first'=>0,			//起始位置,从0开始。数组索引值
* 	'last'=>0,			//终点位置，从0开始。
* 	'back'=>0,			//从first位置倒退了多少步，差值。
* 	'history'=>array(	//数组，存放操作队列。
* 		array('path'=>'D:/'),
* 		array('path'=>'D:/www/'),
* 		array('path'=>'E:/'),
* 		array('path'=>'/home/')
* 		……
* 	)
* )
*/

class history{
	var $history_num;
	var $first;
	var $last;
	var $back;
	var $history=array();

	function __construct($array=array(),$num=20){
		if (!$array) {//数组为空.构造一个循环队列。
			$history=array();
			for ($i=0; $i < $num; $i++) {
				array_push($history,array('path'=>''));
			}
			$array=array(
				'history_num'=>$num,
				'first'=>0,//起始位置
				'last'=>0,//终点位置
				'back'=>0,	
				'history'=>$history
			);
		}		
		$this->history_num=$array['history_num'];
		$this->first=$array['first'];
		$this->last=$array['last'];
		$this->back=$array['back'];	
		$this->history=$array['history'];	
	}

	function nextNum($i,$n=1){//环路下n一个值。和时钟环路类似。
		return ($i+$n)<$this->history_num ? ($i+$n):($i+$n-$this->history_num);
	}
	function prevNum($i,$n=1){//环路上一个值i。回退N个位置。
		return ($i-$n)>=0 ? ($i-$n) : ($i-$n+$this->history_num);		
	}

	function minus($i,$j){//顺时针两点只差,i-j
		return ($i > $j) ? ($i - $j):($i-$j+$this->history_num);
	}


	function getHistory(){//返回数组,用于保存或者序列化操作。
		return array(
			'history_num'=> $this->history_num,
			'first'		 => $this->first,			
			'last'		 => $this->last,
			'back'		 => $this->back,			
			'history'	 => $this->history
		);
	}

	function add($path){
		if ($path==$this->history[$this->first]['path']) {//和最后相同，则不记录
			return 0;
		}
		if ($this->back!=0) {//有后退操作记录的情况下，进行插入。
			$this->goedit($path);
			return;
		}		
		if ($this->history[0]['path']=='') {//刚构造，不用加一.首位不前移
			$this->history[$this->first]['path']=$path;
			return;
		}else{
			$this->first=$this->nextNum($this->first);//首位前移
			$this->history[$this->first]['path']=$path;			
		}
		if ($this->first==$this->last) {//起始位置与终止位置相遇
			$this->last=$this->nextNum($this->last);//末尾位置前移。
		}		
	}

	function goback(){//返回从first后退N步的地址。
		$this->back+=1;
		//最大后退步数为起点到终点之差(顺时针之差)
		$mins=$this->minus($this->first,$this->last);
		if ($this->back >= $mins) {//退到最后点
			$this->back=$mins;
		}

		$pos=$this->prevNum($this->first,$this->back);
		return $this->history[$pos]['path'];
	}

	function gonext(){//从first后退N步的地方前进一步。
		$this->back-=1;
		if ($this->back<0) {//退到最后点
			$this->back=0;
		}
		return $this->history[$this->prevNum($this->first,$this->back)]['path'];
	}
	function goedit($path){//后退到某个点，没有前进而是修改。则firs值为最后的值。
		$pos=$this->minus($this->first,$this->back);
		$pos=$this->nextNum($pos);//下一个		
		$this->history[$pos]['path']=$path;
		$this->first=$pos;
		$this->back=0;
	}

	//是否可以后退
	function isback(){
		if ($this->back==0 && $this->first==0 && $this->last==0) {
			return 0;
		}
		if ($this->back < $this->minus($this->first,$this->last)) {
			return 1;
		}
		return 0;
	}
	//是否可以前进
	function isnext(){
		if ($this->back>0) {
			return 1;
		}
		return 0;
	}
	//取出最新纪录
	function getFirst(){
		return $this->history[$this->first]['path'];
	}
}

//include 'common.function.php';
//$hi=new history(array(),6);//传入空数组，则初始化数组构造。
//for ($i=0; $i <8; $i++) { 
//	$hi->add('s'.$i);	
//}
//pr($hi->goback());
//pr($hi->gonext());
//$hi->add('asdfasdf2');
//pr($hi->getHistory());


//$ss=new history($hi->getHistory());//直接用数组构造。
//$ss->add('asdfasdf');
//$ss->goback();
//pr($ss->getHistory());
