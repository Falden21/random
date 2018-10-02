<?php
/**
 * Created by PhpStorm.
 * User: Falden (Stephen)
 * Date: 9/12/2018
 * Time: 8:18 PM
 */

include(__DIR__ . '/../bootstrap/start.php');
Dotenv::load(__DIR__ . '/../');
include(__DIR__ . "/../bootstrap/db.php");
include(__DIR__ . "/../routes.php");

$match  = $router->match();

list($controller, $method) = explode('@', $match['target']);

if(is_callable(array($controller, $method))){
    $object = new $controller();
    call_user_func_array(array($object, $method), array($match['params']));
} else {
    echo "Failed to find {$controller} -> {$method}";
    exit();
}