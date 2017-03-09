<?php

class MyStack {
	private $buffer = array();   //栈指针
	private $top = 0;   //栈顶
	private $size = 0;  //栈容量
	function __construct($diysize){    //构造函数：分配内存初始化栈空间
		$this->size = $diysize;
	}

	function __destruct(){             //析构函数：回收栈空间内存
		unset($this->buffer);
		echo "已销毁".'<hr />';
	}
	public function StackEmpty(){      //判断栈是否为空
		if(0 == $this->top){
			return  true;
		}else{
			return false;
		}
	}
	public function StackFull(){       //判断栈是否满了
		if ($this->size <= $this->top){
			return true;
		}else{
			return false;
		}
	}
	public function ClearStack(){      //清空栈
		$this->top = 0;

	}
	public function StackLength(){     //获取栈的元素个数
		return $this->top;
	}
	public function Push($elem){       //元素入栈，栈顶上升
		if($this->StackFull()){
			return false;
		}
		$this->buffer[$this->top] = $elem;
		$this->top ++;
	}
	public function Pop(){				//元素出栈，栈顶下降
		if($this->StackEmpty()){
			return false;
		}
		$this->top --;
		echo  '元素：'.$this->buffer[$this->top].'出栈'.'<hr />';
		return true;
	}

	public function StackTraverse(){     //遍历栈中所有元素
		for($i=0;$i<$this->top;$i++){
			echo $this->buffer[$i].",";
		}
		echo '<hr />';
	}
}

?>