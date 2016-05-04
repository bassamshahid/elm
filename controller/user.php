<?php
/**
 * Created by PhpStorm.
 * User: ABN-L3-3_2
 * Date: 04-May-16
 * Time: 6:42 PM
 */
include_once "/model/session.php";
class User {

    function __construct()
    {
       
    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.


    }


    function login(){
        $data=array(
            "username"=>$_POST["username"],
            "password"=>$_POST["password"]
        );
        $obj=new Session();
        $obj->login($data);


    }
}