<?php

namespace IpriceHT;

use IpriceHT\StringHelper;

class App
{
    public function runCommand(array $argv)
    {
        $name = "";
        if (isset($argv[1])) {
            $name = $argv[1];
        }

        $stringHelper = new StringHelper();

        $result = $stringHelper->convertUpperCase($name);

        $result2 = $stringHelper->convertUpperCaseOnOddIndex($name);
      
        echo $result;
        echo  "\n";
        echo $result2;
        echo  "\n";
        
        $result3 = $stringHelper->convertedStrToCsv($name);

    }
}
?>