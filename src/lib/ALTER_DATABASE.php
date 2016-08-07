<?php

class ALTER_DATABASE extends method
{
    // start statement
    public function ALTER_TABLE($database_name)
    {
        $this->query = 'ALTER DATABASEE '.self::cleanSmt($database_name);
    }

    public function CHARACTER_SET($character_set)
    {
        $this->query .= ' CHARACTER SET = '.$character_set;

        return $this;
    }

    public function COLLATE($character_set)
    {
        $this->query .= ' COLLATE = '.$character_set;

        return $this;
    }
}
