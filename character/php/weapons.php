<?php


    function getWeapon($input)
    {
        $a00 = array("Battleaxe", "1d10");
        $a01 = array("Blackjack", "1d3/2d6");
        $a02 = array("Blowgun", "1d3/1d5");
        $a03 = array("Club", "1d4");
        $a04 = array("Crossbow", "1d6");
        $a05 = array("Dagger", "1d4/1d10");
        $a06 = array("Dart", "1d4");
        $a07 = array("Flail", "1d6");
        $a08 = array("Garrote", "1/3d4");
        $a09 = array("Handaxe", "1d6");
        $a10 = array("Javelin", "1d6");
        $a11 = array("Lance", "1d12");
        $a12 = array("Longbow", "1d6");
        $a13 = array("Longsword", "1d8");
        $a14 = array("Mace", "1d6");
        $a15 = array("Polearm", "1d10");
        $a16 = array("Shortbow", "1d6");
        $a17 = array("Short sword", "1d6");
        $a18 = array("Sling", "1d4");
        $a19 = array("Spear", "1d8");
        $a20 = array("Staff", "1d4");
        $a21 = array("Two-handed sword", "1d10");
        $a22 = array("Warhammer", "1d8");


        $array1= array($a00, $a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08, $a09, $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17, $a18, $a19, $a20, $a21, $a22);
        
        return $array1[$input];
        
    }



function getRandomWeapons($luckyWeaponNumber)
{
    //cast to int
    //unneccesary with php, but good practice
    $luckyWeapon = (int)$luckyWeaponNumber;

    $weaponsArray = array();

    for($i = 0; $i <= 22; ++$i)
    {
        if($i != $luckyWeapon)
        {
            array_push($weaponsArray, $i);
        }
    }

    //shuffle $weaponsArray
    shuffle($weaponsArray); 

    $numberOfWeapons = rand (2, 8);

    $weaponsHas = array();

    array_push($weaponsHas, $luckyWeapon);

    for($j = 0; $j < $numberOfWeapons; ++$j)
    {
        $weapon = $weaponsArray[$j];
        array_push($weaponsHas, $weapon);
    }

    return $weaponsHas;
}




?>