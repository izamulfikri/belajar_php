<?php
function sayHello(string $name, callable $filter)
{
    $finalname = call_user_func($filter, $name);
    echo "Hello $finalname" . PHP_EOL;
}

sayHello("Audy", "strtoupper");
sayHello("Audy", "strtolower");
sayHello("Audy", function(string $name): string {
    return strtoupper($name);
});
sayHello("Audy", fn($name) => strtolower($name));

?>