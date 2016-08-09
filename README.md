# VueSQL

VueSQL is a PHP SQL library providing an easy and fluent integration of normal SQL syntax into PHP strings.

This library is originally part of Skyfire's PHP framework database layer known as *VueSQL* service.

## Requirements

- PHP >=5.3.6+
- PDO_MYSQL PHP extensions

## Code Examples

### Establishing a connection (required):

```php
require 'src/VueSQL.php';

$conn = array
(
    'host'     => 'localhost',
    'dbname'   => 'test',
    'user'     => 'root',
    'password' => '*******'
);
```
### Simple select query:

```php
$SQL   = new VueSQL($conn);

$query = $SQL->SELECT('r.rid, r.name')
             ->FROM('test')
             ->WHERE('id', '>', 0)
             ->ORDER_BY('r.weight')->ASC();
             
echo $query->exe();
```

### Simple alternation (change) on a table:

```php
$add   = new VueSQL($conn);

$query = $add->ALTER_TABLE('xml_mapping')
             ->CHANGE('special_rule')
             ->ENUM('meta_value_default',
                    'convert_boolean',
                    'multiple_value_terms')
             ->CHARACTER_SET('utf8')
             ->COLLATE('utf8_general_ci')
             ->NULL();
              
echo $query->exe();
```

## License

VueSQL is licensed under the [MIT License](http://opensource.org/licenses/MIT).

Copyright 2016 [Travis van der Font](http://travisfont.com)
