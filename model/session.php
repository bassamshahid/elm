<?php

/**
 * Created by PhpStorm.
 * User: shehbaz
 * Date: 4/24/16
 * Time: 5:58 PM
 */
class Session
{
    private $manager_user="admin";
    private $manager_pass="admin";
    /**
     * user type
     * 1 -- Manager
     * 2 -- Employee
     */
    const TYPE_MANAGER= 1;
    const TYPE_EMPLOYEE=2;

    function __construct()
    {
    }

    function __destruct()
    {

    }

    function is_valid_user($data)
    {

        if ($data["username"] == $this->manager_user && $data["password"] == $this->manager_pass) {
            $_SESSION["usertype"]=self::TYPE_MANAGER;
        }
        else {
            echo "invalid user";
            exit;
        }
    }


    function login($data)
    {

        session_start();
        $this->is_valid_user($data);
        $_SESSION["user_type"]=$data["user_type"];
        $_SESSION["username"] = $data["username"];
        $_SESSION["password"] = md5($data["password"]);
          var_dump($_SESSION);
    }


    function logout()
    {
        session_start();
        unset($_SESSION);
        session_destroy();
    }

    function checking_user($data){

    }

}

