<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 04-Feb-19
 * Time: 12:47 PM
 */

class Database
{
    private static $instance = null;
    private $conn;
    private function __construct()
    {
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $db_name = 'reunion_island';
        $this->conn = new \PDO("mysql:host=$host;dbname=$db_name", $username, $password);
        $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }
    public static function conn()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance->conn;
    }
}