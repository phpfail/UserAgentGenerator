<?php
require __DIR__ . '/vendor/autoload.php';
error_reporting(E_ALL);

echo 'RANDOM 100:'."\n";
for ($i = 1; $i<= 100; $i++) {
    $agent = new userAgent();
    echo $agent->generate()."\n";
}

echo "\n";
echo 'TESTING NESTED:'."\n";
for ($i = 1; $i<= 10; $i++) {
    $example = 'Android [7.[1|0]|6.0|5.1]';
    $agent = new userAgent();
    echo $agent->generate($example)."\n";
}
