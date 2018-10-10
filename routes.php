<?php
/**
 * Created by PhpStorm.
 * User: Falden (Stephen)
 * Date: 9/13/2018
 * Time: 7:17 PM
 */

// Registration Routes
$router->map('get', '/register', 'Acme\Controllers\RegisterController@getShowRegisterPage', 'register');
$router->map('post', '/register', 'Acme\Controllers\RegisterController@postShowRegisterPage', 'register_post');

// Login / Logout routes
$router->map('get', '/login', 'Acme\Controllers\AuthenticationController@getShowLoginPage', 'login');
$router->map('post', '/login', 'Acme\Controllers\AuthenticationController@postShowLoginPage', 'login_post');
$router->map('get', '/logout', 'Acme\Controllers\AuthenticationController@getLogOut', 'logout');
$router->map('get', '/get-test-user', 'Acme\Controllers\AuthenticationController@getTestUser', 'test_user');

// Page Routes
$router->map('get', '/', 'Acme\Controllers\PageController@getShowHomePage', 'home');
$router->map('get', '/page-not-found', 'Acme\Controllers\pageController@getShow404');
$router->map('get', '/[*]', 'Acme\Controllers\pageController@getShowPage', 'about');
