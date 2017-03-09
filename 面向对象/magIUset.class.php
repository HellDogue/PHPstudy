<?php

class MagicTest{
	// __get在对象调用不存在的值时调用
	public function __get($name){
		return "得到了这个名字:".$name."<br />";
	}
	
	// __set在对象给不存在的值赋值时调用
	public function __set($name,$value){
		echo "设置了这个名字:".$name." 还有值是:".$value."<br />";
	}

	// __isset在对象用isset()和empty()方法时调用
	public function __isset($name){
		echo "__isset invoked<br />";
		return true;
	}

	// __unset在对象调用unset()方法时调用
	public function __unset($name){
		echo "unsetting property".$name."<br />";
	}
}

$obj = new MagicTest();
echo $obj->bigname;
$obj->bigname = "MagicTest";
echo '$obj->bigname设置了吗？'.isset($obj->bigname)."<br />";
unset($obj->bigname);
?>