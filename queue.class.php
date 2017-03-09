<?php

class MyQueue{
	private $butter = array();   //队列数组指针
	private $QueueLen = 0;       //队列元素个数
	private $QueueCapacity = 0;  //队列数组容量
	private $head = 0;           //队头
	private $tail = 0;           //队尾
	function __construct($capacity){         //构造函数:创建队列 
		$this->QueueCapacity = $capacity;
	}
	function __destruct(){					//析构函数:销毁队列
		unset($this->butter);
		echo '已销毁队列'.'<hr />';
	}
	public function ClearQueue(){           //清空队列
		$this->head = 0;
		$this->tail = 0;
		$this->QueueLen = 0;
	}
	public function QueueEmpty(){           //判断队列是否为空
		if (0 == $this->QueueLen){
			return true;
		}else{
			return false;
		}
	}
	public function QueueFull(){ 			//判断队列是否为满
		if ($this->QueueLen >= $this->QueueCapacity){
			return true;
		}else{
			return false;
		}
	}
	public function QueueLength(){          //获取队列长度
		return $this->QueueLen;
	}
	public function EnQueue($obj){   //新元素入队
		if($this->QueueFull()){
			return false;
		}
		$this->butter[$this->tail] = $obj;
		$this->tail ++;
		$this->QueueLen++;
	}
	public function DeQueue(){   //首元素出队
		if($this->QueueEmpty()){
			return false;
		}
		echo  '元素：'.$this->butter[$this->head].'出队！'.'<hr />';
		$this->head ++;
		$this->QueueLen--;
	}
	public function QueueTraverse(){       //遍历队列
		for ($i = $this->head; $i < ($this->head + $this->QueueLen);$i++){
			echo $this->butter[$i].',';
		}
		echo "<hr />";
	}
}


?>