<?php
/**
 * Created by PhpStorm.
 * User: Falden (Stephen)
 * Date: 9/13/2018
 * Time: 7:17 PM
 */
$router->map('get', '/', 'Acme\Controllers\PageController@getShowHomePage', 'home');
$router->map('get', '/register', 'Acme\Controllers\RegisterController@getShowRegisterPage', 'register');
$router->map('post', '/register', 'Acme\Controllers\RegisterController@postShowRegisterPage', 'register_post');
$router->map('get', '/login', 'Acme\Controllers\RegisterController@getShowLoginPage', 'login');
