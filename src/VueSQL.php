<?php

// use some type of autoloading here
require_once 'lib/constants.php';
require_once 'lib/method.php';

require_once 'lib/ALTER_DATABASE.php';
require_once 'lib/CHANGE_TABLE.php';
require_once 'lib/ALTER_TABLE.php';
require_once 'lib/_.php';

final class VueSQL extends _
{
    private $host;
    private $name;
    private $user;
    private $password;
    private $connection;

    public function __construct($credentials)
    {
        try
        {
            $this->connection = new PDO('mysql:host='.$credentials['host'].';dbname='.$credentials['dbname'].';charset=utf8', $credentials['user'], $credentials['password']);
        }
        catch (PDOException $exception)
        {
            throw new Exception($exception->getMessage());
        }
    }

    public function exe()
    {
        return trim($this->query).';';
    }
}
