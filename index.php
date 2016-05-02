<?php
/**
 * Created by PhpStorm.
 * User: shehbaz
 * Date: 4/26/16
 * Time: 10:56 PM
 */
class Routing
{


}

include_once "controllers/session.php";
include_once "models/security.php";

function get_get($action = "")
{
    return $_GET[$action];
}

function main()
{

    switch (get_get("controller")) {
        case login:
            $obj = new Session();
            $sobj = new Security();
            $pdata = $sobj->filter_var($_POST);
            $obj->login($pdata);
            break;
        case sub:
            echo "sub";
            break;

    }
}

/**
 * calling main function
 */

main();