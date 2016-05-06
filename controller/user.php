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

    function logout(){


        $obj= new Session();
        $obj->logout();
//        echo "Logout";
        header("Location: http://localhost/elm/index.php?controller=login");
//        echo "<a href='http://localhost/elm/index.php?controller=login'> Login </a>";
    }

     function login_page(){

         include_once "/material-login.php";
    }
}