<?php
class NbaPlayer{
	public $name;
	// __clone在对象被克隆时调用
	function __clone(){
		$this->name = "TBD";
	}
}
$james = new NbaPlayer();
$james->name = "James";
echo $james->name."<br />";
$james2 = clone $james;
echo "Before setup James2's:".$james2->name."<br />";
$james2->name = "James2";
echo "James's:".$james->name."<br />";
echo "James2's:".$james2->name."<br />";
?>