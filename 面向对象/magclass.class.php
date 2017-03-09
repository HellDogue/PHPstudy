<?php

class MagicTest{
	// __tostring会在把对象转换为string的时候调用
	public function __tostring(){
		return "This is the Class MagicTest<br />";
	}
	// __invoke会再把对象当作一个方法调用的时候自动调用
	public function __invoke($x){
		echo "数字是：".$x;
	}

}

$obj = new MagicTest();
echo $obj;
echo $obj("5")
?>