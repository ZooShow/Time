<?php

$date = date_create_immutable();

$newDate = $date->setDate(2022, 9, 31);
var_dump($date);
// поставит 1 октября
var_dump($newDate);
// ошибок нет
var_dump($newDate::getLastErrors());

$date4 = DateTimeImmutable::createFromFormat('d.m.Y h:i:s.u', '03.10.2022 12:30:28.12313');
var_dump($date4);