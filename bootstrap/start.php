<?php
/**
 * Created by PhpStorm.
 * User: Falden (Stephen)
 * Date: 9/13/2018
 * Time: 7:16 PM
 */
session_start();
require(__DIR__ . "/../vendor/autoload.php");

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
$router = new AltoRouter();