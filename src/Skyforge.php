<?php

class Skyforge
{
    private $host;
    private $name;
    private $user;
    private $password;

    private $connection;
    private $query = '';

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

    public function SELECT($smt)
    {
        $this->query .= ' SELECT '.$smt;

        return $this;
    }

    public function FROM($smt)
    {
        $this->query .= ' FROM '.trim($smt);

        return $this;
    }

    public function WHERE($smt, $smt1 = FALSE, $smt2 = FALSE)
    {
        if (is_array($smt) && count($smt) == 3)
        {
            $this->query .= ' WHERE '.trim($smt[0]).' '.trim($smt[1]).' '.trim($smt[2]);
        }

        if (is_string($smt))
        {
            if ($smt1 !== FALSE && $smt2 !== FALSE)
            {
                $this->query .= ' WHERE '.trim($smt).' '.trim($smt1).' '.trim($smt2);
            }
            else
            {
                $this->query .= ' WHERE '.trim($smt);
            }
        }

        return $this;
    }

    private static function cleanSmt($smt)
    {
        return '`'.str_replace('.', '`.`', str_replace('`', '', trim($smt))).'`';
    }

}