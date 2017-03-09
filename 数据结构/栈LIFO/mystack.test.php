<?php 
require 'mystack.class.php';
$xh = new MyStack(5);

$xh->Push("h");     //底
$xh->Push("e");
$xh->Push("l");
$xh->Push("l");
$xh->Push("o");     //顶

$xh->StackTraverse();
echo '栈有：'.$xh->StackLength().'个<hr />';
$xh->Pop();
$xh->Pop();

$xh->StackTraverse();
echo '栈有：'.$xh->StackLength().'个<hr />';

$xh->Pop();
$xh->Pop();
$xh->Pop();

//$xh->ClearStack();
echo '栈有：'.$xh->StackLength().'个<hr />';

if ($xh->StackEmpty()){
	echo "栈为空".'<hr />';
}
if ($xh->StackFull()){
	echo "栈为满".'<hr />';
}





unset($xh);
$xh = null;

?>