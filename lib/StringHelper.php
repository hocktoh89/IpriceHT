<?php

namespace IpriceHT;

class StringHelper
{    
    public function convertUpperCase(String $inputStr) {
        return strtoupper($inputStr);
    }

    public function convertUpperCaseOnOddIndex(String $inputStr) {
        $wordAllLower = strtolower($inputStr);
        $wordArray = str_split($wordAllLower);
        
        $func = function($item, $currentIndex) {

            if ($currentIndex % 2) {
                return strtoupper($item);
            }

            return $item;
        };
        
        $resultArr = array_map($func, $wordArray, array_keys($wordArray));
        return join("",$resultArr);
    }
}
?>