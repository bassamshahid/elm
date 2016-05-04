<?php
/**
 * Created by PhpStorm.
 * User: shehbaz
 * Date: 4/30/16
 * Time: 11:39 PM
 */

/**
 * Class Manager
 * parent access.
 */
interface Manager
{

    function add_employee();

    function list_employee();

    function delete_employee();

    function approve_leave();

    function reject_leave();


}

interface Employee extends Manager
{
    function add_leave($data);


}

class ImpManager implements Manager
{
    /**
     * add employee
     */
    function add_employee()
    {
        // TODO: Implement add_emplyee() method.
        $sql="";
    }

    function list_employee()
    {
        // TODO: Implement list_employee() method.
    }

    function delete_employee()
    {
        // TODO: Implement delete_employee() method.
    }

    function approve_leave()
    {
        // TODO: Implement approve_leave() method.
    }

    function reject_leave()
    {
        // TODO: Implement reject_leave() method.
    }
}


