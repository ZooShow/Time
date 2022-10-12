<?php

//$date = date_create();
//
//// не выдаст ошибку, доп дни запишет в октябрь
//$date->setDate(2022, 9, 40);
//var_dump($date);
//// даж в ошибку не запишет :/
//var_dump($date::getLastErrors());
//
//// поменяет
//$date->setDate(2022, 9, 30);
//var_dump($date);
//
//// относительный формат даты
//$date2 = new DateTime('next monday');
//var_dump($date2);
//
//$date3 =date_create('first sat of July 2008');
//var_dump($date3);
//
//// составной формат
//$date4 = DateTime::createFromFormat('d.m.Y h:i:s.u', '03.10.2022 12:30:28.12313');
//var_dump($date4);

// день недели
echo date('l') . PHP_EOL;

// день недели, число месяц год, врема
echo date('l jS \of F Y h:i:s A') . PHP_EOL;

// дата + время
echo date(DATE_ATOM) . PHP_EOL;

// ассоциативный массив с датой
print_r(getdate());

// эквивалентно time()
echo 'strtotime:' . strtotime('now'). PHP_EOL;
echo 'time:' . time(). PHP_EOL;

echo strtotime('10 September 2000'). PHP_EOL;

echo strtotime('+1 day'). PHP_EOL;

echo strtotime('+1 week'). PHP_EOL;

echo strtotime('+1 week 2 days 4 hours 2 seconds'). PHP_EOL;

echo strtotime('next Thursday'). PHP_EOL;

echo strtotime('last Monday'). PHP_EOL;
