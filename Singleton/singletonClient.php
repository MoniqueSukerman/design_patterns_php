<?php

require_once 'autoloader.php';

use Singleton\Singleton;

$singleton = Singleton::getSingleton();
$singleton2 = Singleton::getSingleton();

echo $singleton === $singleton2;