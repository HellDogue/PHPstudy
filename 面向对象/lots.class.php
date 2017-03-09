<?php
/**
 * static 静态属性注意点：
 * 1.静态属性用于保存类的公有数据
 * 2.静态方法里面只能访问静态属性
 * 3.静态成员不需要实例化对象就可以访问
 * 4.类的内部可以通过self或者static关键词访问自身静态成员
 * 5.可以通过parent关键字访问父类的静态成员
 * 6.可以通过类的名称在类定义外部访问静态成员
 */
class Human{
	public $name = "";
	protected $height=""; //只有自身和子类能够访问
	public $weight="";
	private $ishungry=true;   //私有的private
	public static $sValue = "在Human类中的静态成员<br/>";
	public function eat($food){
 		echo $this->name."正在吃".$food."，当吃完了后发现".$this->ishungry."<br/>";
 	}
}
class gods extends Human{
	private $age="20"; //只能在类内部被访问
	public $do = "";
	//静态属性定义时在访问控制关键字后添加static关键词即可
	public static $laoda = "徐豪";
	//静态方法定义同上
	public static function changelaoda($newlaoda){
		//在类定义中使用静态成员的时候，用self关键字或者static关键字后面跟着::操作符，即可。
		//注意：在访问静态成员属性的时候，::后面需要跟$符号。
		self::$laoda=$newlaoda;
		//使用parent关键词就能访问父类的静态成员
		echo parent::$sValue;
	}
	function __construct($name,$height,$weight,$do,$age){ //构造函数__construct()
		$this->name =$name;								  //类被实例化时调用
		$this->height =$height;							  //可以带参数
		$this->weight =$weight;
		$this->do =$do;
		$this->age =$age;
		echo "意大利炮开炮手：<br/>";
	}
	function __destruct(){							      //析构函数__destruct()
		echo "二营长被他娘的干翻了！！！<br/>";				  //实例化的对象在结束使用时调用
	}
	public function getage(){
		echo $this->name."年龄为".($this->age - 2)."岁<br/>";
	}
}
$lb = new gods ("李彬打手","175cm<br/>","60kg<br/>","打手<br/>","20");
echo $lb->name."的老大是".gods::$laoda."<br/>";
$lb=null;
$yt = new gods ("杨哥狙击手","165cm<br/>","60kg<br/>","狙击手<br/>","20");
echo $yt->name."的老大是".gods::$laoda."<br/>";
$yt=null;

//$lb->changelaoda("爸爸");
//echo $lb->name."的老大是".$lb->laoda."<br/>";
//echo $yt->name."的老大是".$yt->laoda."<br/>";

//再类定义外部访问静态属性，可以用类名加::操作符的方法来访问类的静态成员
echo gods::$laoda."改变前<br/>";
gods::changelaoda("棒打老狗");
echo gods::$laoda."改变后<br/>";
echo Human::$sValue;

//echo $yt->getage();
//$yt->eat("耳机");
//$yt2=&$yt;  //引用对象   绑在一起 两个兄弟
//$yt=null;   //强制销毁对象










?>