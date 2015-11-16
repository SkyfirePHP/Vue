<?php

// autoload here

require 'src/VueSQL.php';

$conn = array
(
    'host'     => 'localhost',
    'dbname'   => 'test',
    'user'     => 'root',
    'password' => ''
);

$SQL   = new VueSQL($conn);

$query = $SQL->SELECT('r.rid, r.name')
             ->FROM('test')
             ->WHERE('id', '>', 0)
             ->ORDER_BY('r.weight')->ASC();

echo $query->exe();
