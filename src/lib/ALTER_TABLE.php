<?php

class ALTER_TABLE extends ALTER_DATABASE
{
    // start statement
    public function ALTER_TABLE($table_name)
    {
        $this->query = 'ALTER TABLE '.self::cleanSmt($table_name);

        return new CHANGE_TABLE($this->query);
    }

    public function CONVERT_TO_CHARACTER_SET($character_set)
    {
        $this->query .= ' CONVERT TO CHARACTER SET '.$character_set;

        return $this;
    }

    public function DEFAULT_CHARACTER_SET($character_set)
    {
        $this->query .= ' DEFAULT CHARACTER SET '.$character_set;

        return $this;
    }

    public function COLLATE($character_set)
    {
        $this->query = ' COLLATE '.$character_set;

        return $this;
    }
}
