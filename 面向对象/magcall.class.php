<?php

class MagicTest{
	// __call方法的重载
	// 这个方法的参数第一个就是调用的方法的名称，第二个参数是方法调用的参数组成的数组
	public function __call($name,$arguments){
		echo "Static Calliing ".$name." with parameters:".implode(",",$arguments)."<br />";
	}
	// __callstatic静态方法重载。注意：这个方法要被设置为static
	public static function __callstatic($name,$arguments){
		echo "Calliing ".$name." with parameters:".implode(",",$arguments)."<br />";
	}
}

$obj = new MagicTest();
$obj -> runTest("para1","para2");
MagicTest::runTest("para1","para2");
?>