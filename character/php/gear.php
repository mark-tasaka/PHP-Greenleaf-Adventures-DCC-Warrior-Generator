<?php


function getGear($input)
{
    
        $a00 = array("Backpack");
        $a01 = array("Candle");
        $a02 = array("Chain (10 feet)");
        $a03 = array("Chalk (12 pieces)");
        $a04 = array("Chest (empty)");
        $a05 = array("Crowbar");
        $a06 = array("Flask");
        $a07 = array("Flint & Steel");
        $a08 = array("Grappling Hook");
        $a09 = array("Hammer (small)");
        $a10 = array("Holy Symbol");
        $a11 = array("Holy Water (1 vial)");
        $a12 = array("Iron Spikes (12)");
        $a13 = array("Lantern");
        $a14 = array("Mirror (hand-sized)");
        $a15 = array("Oil (flask)");
        $a16 = array("Pole (10-foot)");
        $a17 = array("Rations (5 days)");
        $a18 = array("Rope (50 feet)");
        $a19 = array("Sack (large)");
        $a20 = array("Sack (small)");
        $a21 = array("Thieves' tools");
        $a22 = array("Torches (12)");
        $a23 = array("Waterskin");
        $a24 = array("Arrows (20)");
        $a25 = array("Silver-tipped Arrows (5)");
        $a26 = array("Quarrels (30)");
        $a27 = array("Sling stones (12)");

    
        $arr= array($a00, $a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08, $a09, $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17, $a18, $a19, $a20, $a21, $a22, $a23, $a24, $a25, $a26, $a27);
        
        return $arr[$input];
}


function getRandomGear()
{
        $gearArray = array(0, 7, 17, 22, 23);

        $numberOfGear = rand(5, 15);

        $addToArray = array(1, 2, 3, 4, 5, 6, 8, 9, 10, 11, 12, 13, 14, 15, 16, 18, 19, 20, 21);

        shuffle($addToArray);

        for($j = 0; $j <= $numberOfGear; ++$j)
        {
                $gear = $addToArray[$j];
                array_push($gearArray, $gear);
        }

        return $gearArray;

}


?>