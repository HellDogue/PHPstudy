<?php
//abstract用于定义抽象类
abstract class ACanEat{
	//在方法前面添加abstract关键字可以标明这个方法是抽象方法，不需要具体的实现
	abstract public function eat($food);

	//抽象类中可以包含普通的方法，有方法的具体实现
	public function breath(){
		echo "抽象类不想理你，并且吸了一口雾霾<br/>";
	}
}

//继承抽象类的关键字是extends
class Human extends ACanEat{
	//继承抽象类的子类需要实现抽象类中定义的抽象方法
	public function eat($food){
		echo "这个人吃了".$food."<br/>";
	}
}
class Animal extends ACanEat{
	public function eat($food){
		echo "这个动物吃了".$food."<br/>";
	}
}
$man = new Human();
$man->eat("杨月");
$man->breath();    //和Animal类共用了抽象类中的breath方法
$monkey = new Animal();
$monkey->eat("杨月的隔壁二舅奶奶");
$monkey->breath();













?>



 