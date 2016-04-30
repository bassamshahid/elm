<?php

/**
 * Created by PhpStorm.
 * User: shehbaz
 * Date: 4/24/16
 * Time: 5:58 PM
 */
class Session
{

    function __construct()
    {
    }

    function __destruct()
    {

    }

    function is_valid_user($data)
    {

        if ($data["username"] == "admin" && $data["password"] == "admin") {

        }
    }

    function login($data)
    {

        session_start();
        $this->is_valid_user($data);
        $_SESSION["username"] = $data["username"];
        $_SESSION["password"] = md5($data["password"]);
//        var_dump($_SESSION);
    }


    function logout()
    {
        session_start();
        unset($_SESSION);
        session_destroy();
    }

}
