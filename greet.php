<?php

// print_r($argc);
// print_r($argv);

if(isset($argv[1])){
    $name=$argv[1];
    echo "Hello, $name\n";
} else{
    echo "Hello, Stranger \n";
}
print_r($argc);
echo PHP_EOL;
var_dump($argv);