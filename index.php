<?php

include_once 'vendor/autoload.php';

$list = new LinkedList\SinglyLinkedList(null);

$list->addElement(11);
$list->addElement(2);
$list->addElement(6);
$list->addElement(3);
$list->addElement(4);
$list->addElement(10);
$list->addElement(8);

echo $list->display();