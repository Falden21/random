<?php
/**
 * Created by PhpStorm.
 * User: Falden (Stephen)
 * Date: 9/12/2018
 * Time: 8:18 PM
 */
$controller = null;
$method     = null;
include(__DIR__ . '/../bootstrap/start.php');
Dotenv::load(__DIR__ . '/../');
include(__DIR__ . "/../bootstrap/db.php");
include(__DIR__ . "/../routes.php");

$match = $router->match();

if (is_string($match['target']))
    list($controller, $method) = explode('@', $match['target']);

if (($controller != null) && (is_callable([$controller, $method]))) {
    $object = new $controller();
    call_user_func_array([$object, $method], [$match['params']]);
} elseif ($match && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    echo "Failed to find {$controller} -> {$method}";
    exit();
}