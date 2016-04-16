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


/*
$add   = new VueSQL($conn);
$query = $add->ALTER_TABLE('xml_mapping')
              ->CHANGE('special_rule')
              ->ENUM('meta_value_default',
                     'convert_boolean',
                     'multiple_value_terms')
              ->CHARACTER_SET('utf8')
              ->COLLATE('utf8_general_ci')
              ->NULL();
*/