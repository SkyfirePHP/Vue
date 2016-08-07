<?php

class CHANGE_TABLE
{
    private $query;

    public function __construct($query)
    {
        $this->query = $query;
    }

    public function CHANGE($field_name)
    {
        $this->query .= 'CHANGE `'.$field_name.'` `'.$field_name.'`';

        return $this;
    }

    public function ENUM($enum)
    {
        $enum = array(); // get the values from the all the parameters

        // add a " to both sides of the enum using a array_map()
        $this->query .= ' ENUM('.implode(',', $enum).')';

        return $this;
    }

    public function CHARACTER_SET($character_type)
    {
        $this->query .=  'CHARACTER SET '.$character_type;

        return $this;
    }

    public function COLLATE($character_type)
    {
        $this->query .=  'COLLATE '.$character_type;

        return $this;
    }

    public function NULL()
    {
        $this->query .=  'NULL';
    }
}
