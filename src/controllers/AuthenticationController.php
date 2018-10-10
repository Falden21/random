<?php
/**
 * Created by PhpStorm.
 * User: Falden (Stephen)
 * Date: 9/25/2018
 * Time: 12:57 AM
 */

namespace acme\controllers;

use Acme\Models\User;
use Acme\Controllers\BaseController as BaseController;
use Acme\Validation\validator as Validator;
use Acme\Auth\LoggedIn;
class AuthenticationController extends BaseController
{

    public function getShowLoginPage()
    {
//        include(__DIR__ . "/../../views/login.html");
        echo $this->blade->render('login');
    }

    public function postShowLoginPage()
    {
        $validate = true;
        $email    = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        // Look up user.
        $user = User::where('email', '=', $email)->first();
        if ($user != null) {
            // Validate password.
            if (!password_verify($password, $user->password)) {
                $validate = false;
            }
        } else {
            $validate = false;
        }

        // If Valid login unless Redirect to login w/ error.

        if ($validate) {
            $_SESSION['user'] = $user;
            header("Location: /");
            exit;
        } else {
            $_SESSION['err_msg'] = ["Invalid Login"];
            echo $this->blade->render('login');
            unset($_SESSION['err_msg']);
            exit;
        }
    }

    public function getLogOut(){
        unset($_SESSION['user']);
        session_destroy();
        return header("Location: /login");
    }

    public function getTestUser(){
        dd(LoggedIn::user());
    }

}