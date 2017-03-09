<?php 
class ShunxuList{

	private $buffer = array();    //顺序表指针
	private $size = 0;			  //顺序表容量
	private $len = 0;             //顺序表长度

	function __construct($num){    //构造函数：分配内存初始化顺序表空间
		$this->size = $num;
	}
	function __destruct(){			//析构函数：回收顺序表空间内存
		unset($this->buffer);
		$this->buffer = null;
		echo "已销毁顺序表".'<hr />';
	}
	public function ClearList(){    //清空当前顺序表
		if($this->ListEmpty()){
			echo "顺序表中无数据<hr />";
			return false;
		}
		foreach ($this->buffer as $key => $value) {
			unset($this->buffer[$key]);
		}
		$this->len = 0;
		echo "已清空顺序表<hr />";
	}
	public function ListEmpty(){    //判空顺序表
		if (0 == $this->len){
			return true;
		}else{
			return false;
		}
	}
	public function ListLength(){    //获取顺序表长度
		return $this->len;
	}
	public function GetElem($i){      //获取顺序表内容
		if ($i>0 || $i<=$this->size){
			return false;
		}
		echo "要获取的顺序表内容：".$this->buffer[$i].'<hr />';
	}
	
	public function LocateElem($e){     //寻找第一个满足e元素的位序
		foreach ($this->buffer as $key=>$connect){
			//echo $connect;
			if($e == $connect){
				//echo '第一个满足e元素的位序是：'.$key.'<hr />'
				return $key;
			}
		}
		return -1;
	}

	public function PriorElem($ebefore){         //获得指定元素的前驱
		$temp = $this->LocateElem($ebefore);
		if (-1 == $temp){
			echo '没有找到:'.$ebefore.'元素'.'<hr />';
			return false;
		}else{
			if(0 == $temp){
				echo '元素:'.$ebefore.'是第一位'.'<hr />';
				return false;
			}else{
				echo $ebefore."元素前驱为:".$this->buffer[$temp-1].'<hr />';
			}
		}
	}

	public function NextElem($eafter){         //获得指定元素的后继
		$temp = $this->LocateElem($eafter);
		if (-1 == $temp){
			echo '没有找到:'.$eafter.'元素'.'<hr />';
			return false;
		}else{
			//if($this->len-1 == $temp){
			if($this->len == $temp){
				echo '元素:'.$eafter.'是最后一位'.'<hr />';
				return false;
			}else{
				echo $eafter."元素后继为:".$this->buffer[$temp+1].'<hr />';
			}
		}
	}

	public function ListTraverse(){             //遍历顺序表
		if($this->ListEmpty()){
			echo "顺序表中无数据<hr />";
			return false;
		}
		foreach ($this->buffer as $key=>$connect){
			echo $key."=>".$connect.'<br />';
		}
	}

	public function ListInsert($i,$elem){               //在第i个索引位置插入元素
		if($i < 0 || $i > $this->size){
			echo '参数:'.$i.'不合法<hr />';
			return false;
		}
		if ($this->size == $this->len){
			echo "顺序表满了，无法添加数据<hr />";
			return false;
		}
		for($k=$this->len-1;$k>=$i;$k--){
			$this->buffer[$k+1] = $this->buffer[$k];
		}
		$this->buffer[$i] = $elem;
		$this->len ++;
		echo "已经插入元素:".$elem."-》到第".$i."个元素索引下标位置<hr />";
		return true;
	}

	public function ListDelete($i){					//在第i个索引位置删除元素
		if ($i<0 || $i > $this->len){
			echo '参数:'.$i.'不合法<hr />';
			return false;
		}
		if ($this->ListEmpty()){
			echo "顺序表为空，无法删除<hr />";
			return false;
		}
		$deletevar = $this->buffer[$i];
		for($k=$i+1;$k<=$this->len-1  ;$k++){
			$this->buffer[$k-1] = $this->buffer[$k];
		}
		unset($this->buffer[$this->len-1]);
		$this->len --;
		echo "已经删除元素:".$deletevar.'<hr />';
		return true;
	}
	
}





?>