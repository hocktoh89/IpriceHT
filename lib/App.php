<?php

namespace IpriceHT;

use IpriceHT\StringHelper;

class App
{
    public function runCommand(array $argv)
    {
        $name = "World";
        if (isset($argv[1])) {
            $name = $argv[1];
        }

        $stringHelper = new StringHelper();

        $result = $stringHelper->convertUpperCase($name);

        echo $result;
        echo  "\n";
        echo "Hello $name!!!\n";
    }
}
?>