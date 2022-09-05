<?php

$date = date_create();

// не выдаст ошибку, доп дни запишет в октябрь
$date->setDate(2022, 9, 40);
var_dump($date);
// даж в ошибку не запишет :/
var_dump($date::getLastErrors());

// поменяет
$date->setDate(2022, 9, 30);
var_dump($date);

// относительный формат даты
$date2 = new DateTime('next monday');
var_dump($date2);

$date3 =date_create("first sat of July 2008");
var_dump($date3);

// составной формат
$date4 = DateTime::createFromFormat('d.m.Y h:i:s.u', '03.10.2022 12:30:28.12313');
var_dump($date4);