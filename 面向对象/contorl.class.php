<?php
/**
 * 访问控制
 * 1.parent关键字可以用于调用父类中被子类重写了的方法
 * 2.self关键字可以用于访问类自身的成员方法，也可以用于访问自身的静态成员和类常量；不能用于访问类自身的属性；使用常量的时候不需要在常量名称前面添加$符号
 * 3.static关键字用于访问类自身定义的静态成员，防伪静态属性时需要在属性前面添加$符号
 */
class BaseClass{
	public function test(){
		echo "BaseClass::test called<br/>";
	}
	public function test1(){
		echo "BaseClass::test1 called<br/>";
	}
}
class ChildClass extends BaseClass{
	const CONST_VALUE = "A constant value";
	private static $sValue = "static value";
	public function test(){
		echo "ChildClass::test1 called".$temp."<br/>";
		//用parent关键字可以访问父类中被子类重写的方法
		parent::test();
		self::called();
		echo self::CONST_VALUE."<br/>";
		echo static::$sValue."<br/>";
	}
	public function called(){
		echo "ChildClass::called()<br/>";
	}
}
$obj = new ChildClass();
$obj->test();


?>