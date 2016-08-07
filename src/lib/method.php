<?php

abstract class method extends constants
{
    protected $query = '';

    protected static function cleanSmt($smt)
    {
        return '`'.str_replace('.', '`.`', str_replace('`', '', trim($smt))).'`';
    }
}
