<?php

// interface关键字用于定义接口
interface ICanEat{
	// 接口里面的方法不需要有方法的实现
	public function eat($food);
}
// implements关键字用于表示类实现某个接口
class Human implements  ICanEat{
	// 实现了某个接口之后，必须提供接口中定义的方法的具体实现
	public function eat($food){
		echo "人吃".$food."<br/>";
	}
}
class Animal implements  ICanEat{
	public function eat($food){
		echo "动物吃".$food."<br/>";
	}
}
$obj = new Human();
$obj->eat("人");
$monkey = new Animal();
$monkey->eat("动物");
// 不能实例化接口
// $eatObj = new ICanEat();
function checkEat($obj){
	// 可以用instanceof关键词来判断某个对象是否实现了某个接口
	if($obj instanceof ICanEat){
		$obj->eat("大便");
	}else{
		echo "这个东西还不具有吃大便的功能";
	}
}
//相同的一行代码，对于传入不同的接口的实现的对象的时候，表现是不同的，这就是多态
checkEat($obj);
checkEat($monkey);
//可以用 extends 让接口继承接口
interface ICanPee extends ICanEat{
	public function pee();
}
//当类实现子接口时，父接口定义的方法也需要在这个类里面具体实现
class Human1 implements ICanPee{
	public function pee(){echo "子接口不想理你，并撒了一泡尿<br/>";}
	public function eat($food){echo "子接口吃".$food."<br/>";}
}
$int = new Human1();
$int->pee();
?>