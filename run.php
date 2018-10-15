<?php declare(strict_types = 1);

use BusFlix\Seat;

require __DIR__ . '/src/Seat.php';

$seat = new Seat();
var_dump($seat->isAvailable());

$seat->occupy();

var_dump($seat->isAvailable());
