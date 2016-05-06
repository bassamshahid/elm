<?php
/**
 * Created by PhpStorm.
 * User: shehbaz
 * Date: 4/26/16
 * Time: 10:56 PM
 */
include "controller/user.php";
class Routing
{


}


function get_get($action = "")
{
    return $_GET[$action];
}

function main()
{   

    switch (get_get("controller")) {
        case "login":
           $obj1= new User();
           $obj1->login_page();
            break;
        case "is_login":
            $shehreyar=new User();
            $shehreyar->login();
            break;
        case "logout":

            $obj1=new User();
            $obj1->logout();
            break;
        default:
            include "material-login.php";

    }
}

/**
 * calling main function
 */

main();