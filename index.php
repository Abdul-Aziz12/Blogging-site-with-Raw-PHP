<?php

require_once 'vendor/autoload.php';

use App\classes\Home;
use App\classes\HelloWorld;

$hello = new HelloWorld();

echo $hello -> index();

$home = new Home();
$home->index();
