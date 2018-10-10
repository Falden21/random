<?php
/**
 * Created by PhpStorm.
 * User: Falden (Stephen)
 * Date: 10/10/2018
 * Time: 6:43 AM
 */

namespace Acme\Auth;
use Acme\Models\User;

class LoggedIn
{
    public static function user(){
        if(isset($_SESSION['user'])){
            $user = $_SESSION['user'];
            return $user;
        } else {
            return false;
        }
    }
}