<?php
/**
 * Created by PhpStorm.
 * User: Falden (Stephen)
 * Date: 9/20/2018
 * Time: 7:05 PM
 */

namespace Acme\Validation;

use Respect\Validation\Validator as Valid;

class validator
{
    public function isValid($vd)
    {
        $err = [];
        // getting an array, ["first_name" => "min:3", "last_name" => "min:3"]
        if (isset($_REQUEST[$name])) {
            $rules = explode('|', $value);
            foreach ($rules as $rule) {
                $exploded = explode(':', $rule);
                switch ($exploded[0]) {
                    case
                    'min':
                        $min = $exploded[1];
                        if (Valid::stringType()->length($min)->validate($_REQUEST[$name]) == false) {
                            $err[] = "{$name} is required to be at least {$min} characters long.";
                        }
                        break;
                    case
                    'email':
                        if (Valid::email()->validate($_REQUEST[$name]) == false) {
                            $err[] = "{$name} is required to be an email.";
                        }
                        break;

                    case
                    "equalTo":
                        if (Valid::equals($_REQUEST[$name])->validate($_REQUEST[$exploded[1]]) == false) {
                            $verifyer = str_replace('_', ' ', $exploded[1]);
                            $err[]    = "{$name} is required to match {$verifyer}";
                        }
                        break;

                    default:
                        // Do nothing
                        return $err = ["No value found."];

                }
            }
        }
        return $err;
    }
}