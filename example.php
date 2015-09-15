<?php

// autoload here

require 'src/Skyforge.php';

$conn = array
(
    'host'     => 'localhost',
    'dbname'   => 'test',
    'user'     => 'root',
    'password' => ''
);

$SQL   = new Skyforge($conn);

$query = $SQL->SELECT('*')
             ->FROM('test')
             ->WHERE('id', '>', 0);

echo $query->exe();
