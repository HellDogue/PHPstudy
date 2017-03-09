<?php 
require 'queue.class.php';
$xh = new MyQueue(5);

$xh->EnQueue('h');
$xh->EnQueue('e');
$xh->EnQueue('l');
$xh->EnQueue('l');
$xh->EnQueue('o');

if ($xh->QueueEmpty()){
	echo "队列为空".'<hr />';
}
if ($xh->QueueFull()){
	echo "队列为满".'<hr />';
}

$xh->QueueTraverse();

$xh->DeQueue();
$xh->DeQueue();
$xh->DeQueue();

$xh->QueueTraverse();

echo '队列的长度是：'.$xh->QueueLength().'<hr />';

$xh->DeQueue();
$xh->DeQueue();
$xh->DeQueue();

echo '队列的长度是：'.$xh->QueueLength().'<hr />';

if ($xh->QueueEmpty()){
	echo "队列为空".'<hr />';
}
if ($xh->QueueFull()){
	echo "队列为满".'<hr />';
}

unset($xh);
$xh = null;
?>