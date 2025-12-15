<?php
$box1 = new Box();
$box1->width = 10;
$box2 = clone $box1;
$box2->width = 20;
var_dump($box1->width);
var_dump($box1, $box2);