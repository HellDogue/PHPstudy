<?php
/**
 * final 关键词注意：
 * 子类中编写跟父类完全一致的方法，可以完成重写(overwrite)
 * 对不想被任何类继承的类，可以在class之前添加final关键词
 * 对于不想被子类重写（修改）的方法，可以在方法定义的前面添加final关键字
 */
 //final class BaseClass{
class BaseClass{
	public function test(){
		echo "BaseClass::test called<br/>";
	}
	//添加final关键字能让这个方法不能在子类中重写
	final public function test1(){
		echo "BaseClass::test1 called<br/>";
	}
}
class ChildClass extends BaseClass{
	public function test($temp){
		echo "ChildClass::test1 called".$temp."<br/>";
	}
}
$obj = new ChildClass();
$obj->test("我是你爹");
$obj->test1();


?>