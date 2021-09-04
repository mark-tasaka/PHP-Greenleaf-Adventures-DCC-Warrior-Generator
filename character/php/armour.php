<?php

/*Thief*/

    function getArmour($input)
    {
        $a00 = array("", 0, 0, 0, "d4");
        $a01 = array("Padded armour", 1, 0, 0, "d8");
        $a02 = array("Leather armour", 2, -1, 0, "d8");
        $a03 = array("Studded leather armour", 3, -2, 0, "d8");
        $a04 = array("Hide armour", 3, -3, 0, "d12");
        $a05 = array("Scale mail armour", 4, -4, 5, "d12");
        $a06 = array("Chainmail armour", 5, -5, 5, "d12");
        $a07 = array("Banded mail armour", 6, -6, 5, "d16");
        $a08 = array("Half-plate armour", 7, -7, 10, "d16");
        $a09 = array("Full plate armour", 8, -8, 10, "d16");
        $a10 = array("shield", 1, -1, 0, "d8");
        $a11 = array("", 0, 0, 0, "d4");

        $array1= array($a00, $a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08, $a09, $a10, $a11);
        
        return $array1[$input];
        
    }



?>