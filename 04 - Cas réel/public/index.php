<?php
use App\Autoloader;
require '../app/Autoloader.php';

Autoloader::register();

$p = (isset($_GET['p'])) ? $_GET['p'] : 'home';