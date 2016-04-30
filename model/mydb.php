<?php
/**
 * Created by PhpStorm.
 * User: shehbaz
 * Date: 4/23/16
 * Time: 2:34 AM
 */
class Mydb{
    private $_host;
    private $_user;
    private $_password;
    private $_db_name;
    private $_conn;

    function __construct($host, $user, $pass, $db)
    {
        $this->_host = $host;
        $this->_user = $user;
        $this->_password = $pass;
        $this->_db_name = $db;
        $conn = new mysqli($this->_host, $this->_user, $this->_password, $this->_db_name);

// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $this->_conn = $conn;
    }

    function db_query()
    {
        $sql = "SELECT * FROM employee;";
        $result = $this->_conn->query($sql);
        return $result;
    }

    /*
     * to insert data in the database.
     */
    function db_insert($query)
    {

    }


    function __destruct()
    {
        $this->_conn->close();
    }

}
