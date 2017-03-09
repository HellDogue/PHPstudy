<?php 
require 'shunxu.class.php';
$shunxu = new ShunxuList(6);
$shunxu->ListInsert(0,"x");
$shunxu->ListInsert(1,"h");
$shunxu->ListInsert(2,"t");
$shunxu->ListInsert(3,"s");
$shunxu->ListInsert(4,"b");
echo '第一个满足h元素的位序是：'.$shunxu->LocateElem("h").'<hr />';
$shunxu->ListTraverse();
echo '<hr />';
$shunxu->PriorElem("x");
$shunxu->PriorElem("h");
$shunxu->NextElem("t");
$shunxu->NextElem("c");

$shunxu->ListDelete(1);
$shunxu->ListTraverse();
echo '<hr />';
$shunxu->ListDelete(3);

$shunxu->ListTraverse();
echo '<hr />';

$shunxu->ListInsert(0,"tianshi");
$shunxu->ListTraverse();
echo '<hr />';

$shunxu->ListInsert(1,"dabian");
$shunxu->ListTraverse();
echo '<hr />';

$shunxu->ListInsert(5,"hhee");
$shunxu->ListTraverse();
echo '<hr />';

$shunxu->ClearList();
$shunxu->ListTraverse();

?>
