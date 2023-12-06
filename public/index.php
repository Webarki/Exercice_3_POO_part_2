<?php
//Obtien le repertoire courant
define('ROOT',  dirname(__DIR__) . '/');

use App\Autoloader;
use App\src\Controller\TwigController;

include "../vendor/autoload.php";
include ROOT . "Autoloader.php";

Autoloader::register();

$app = new TwigController();

$app->index();
