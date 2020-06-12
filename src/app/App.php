<?php

namespace IpriceHT;

use IpriceHT\StringHelper;

class App
{
    public function runCommand($name)
    {
        $stringHelper = new StringHelper();

        $result = $stringHelper->convertUpperCase($name);

        $result2 = $stringHelper->convertUpperCaseOnOddIndex($name);
      
        echo $result;
        echo  "\n";
        fwrite(STDOUT, $result2);
        echo  "\n";

        $result3 = $stringHelper->convertedStrToCsv($name);

    }
}
?>