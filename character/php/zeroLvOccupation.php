<?php
//Zero Levo Occupation


function getOccupation($input)
{
        $a00 = array("Baker", "Rolling pin (as club)", "d4", "Bag of flour", "2 loaves of bread");
        $a01 = array("Barber", "Shears (as dagger)", "d4", "Dental pelican", "linen sheet");
        $a02 = array("Beggar", "Sling", "d4", "False eye-patch", "18 copper pieces");
        $a03 = array("Blacksmith", "Hammer (as club)", "d4", "Steel tongs", "");
        $a04 = array("Brewer", "Wooden ladle (as club)", "d4", "Wicked ale (gal)", "");
        $a05 = array("Butcher", "Cleaver (as axe)", "d6", "Side of meat", "");
        $a06 = array("Carpenter", "Handsaw (as dagger)", "d4", "3 planks of wood", "20 nails");
        $a07 = array("Cartwright", "Wheel spoke (as club)", "d4", "Hand-drawn cart", "");
        $a08 = array("Chandler", "Candle holder (as club)", "d4", "Small iron melting pot", "10 candles");
        $a09 = array("Cordwainer", "Hole punch (as dagger)", "d4", "4’ of rolled leather", "extra pair of boots");
        $a10 = array("Cooper", "Barrel stave (as club)", "d4", "1 empty oak barrel", "");
        //12-23 Dispossessed
        $a11 = array("Dispossessed peasant", "Pointy stick (as dagger)", "d4", "The clothes on your back", "");
        $a12 = array("Draper", "Scissors (as dagger)", "d4", "1 bolt of velvet cloth", "");
        $a13 = array("Falconer", "Sling", "d4", "Hunting bird-beast", "padded glove");
        //26-47 Farmer
        $a14 = array("Farmer", "Hoe (as club)", "d4", "Small bird-beast", "");
        $a15 = array("Fishmonger", "Spiny fish (as 1d4 flail)", "d4", "6 fish", "large net");
        $a16 = array("Furrier", "Skinning knife (as dagger)", "d4", "1 large beast pelt", "");
        $a17 = array("Goldsmith", "Cudgel", "d4", "1 oz. gold dust", "scales");
        $a18 = array("Grifter", "Stiletto (as dagger)", "d4", "3 cups and a ball", "loaded dice");
        $a19 = array("Grocer", "Broom (as club)", "d4", "Leather apron", "large sack");
        $a20 = array("Groomsman", "Riding crop (as 1d4 flail)", "d4", "Small riding-beast", "saddle, bridle");
        $a21 = array("Hayward", "Fence post (as club)", "d4", "Map of local area", "lodestone");
        $a22 = array("Hunter", "Hunting knife (as dagger)", "d4", "Small animal trap", "sling");
        //56-60 Indentured servant
        $a23 = array("Indentured servant", "Shiv (as dagger)", "d4", "Stolen silver earrings", "a bag of food");
        $a24 = array("Locksmith", "Club", "d4", "Ring of skeleton keys", "");
        //62-72 Merchant
        $a25 = array("Merchant", "Dagger", "d4", "Ball of twine", "small sack, tin of snuff");
        $a26 = array("Miller", "Club", "d4", "", "Meal (1 lb)");
        $a27 = array("Minstrel", "Dagger", "d4", "Mandolin", "locket with a small picture");
        //75-86 Plowman
        $a28 = array("Plowman", "Kitchen knife (as dagger)", "d4", "Bandana", "small sack");
        $a29 = array("Reeve", "Short sword", "d6", "Official papers", "tin badge");
        $a30 = array("Scribe", "Quill (as dart)", "d4", "Inkpot", "sheaf of papers, small ledger");
        $a31 = array("Silversmith", "Cudgel", "d4", "Silver ring", "");
        $a32 = array("Stonemason", "Mallet (as club)", "d4", "Iron chisel", "");
        $a33 = array("Tailor", "Fine scissors (as dagger)", "d4", "Measuring tape", "20 pins");
        $a34 = array("Tinker", "Tinker’s dam (as dagger)", "d4", "Tinker tools", "4 tin patches");
        $a35 = array("Trapper", "Hunting knife (as dagger)", "d4", "Small animal trap", "20’ rope");
        $a36 = array("Traveling salesman", "Short sword", "d6", "Pack", "assorted worthless gewgaws");
        //95-98 Vagrant
        $a37 = array("Vagrant", "Shiv (as dagger)", "d4", "Flask (grain alcohol)", "one shoe");
        $a38 = array("Weaver", "Bobbin (as dagger)", "d4", "Bushel basket", "straw hat");
        $a39 = array("Woodcutter", "Axe", "d6", "Bundle of wood", "");

        $array1= array($a00, $a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08, $a09, $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17, $a18, $a19, $a20, $a21, $a22, $a23, $a24, $a25, $a26, $a27, $a28, $a29, $a30, $a31, $a32, $a33, $a34, $a35, $a36, $a37, $a38, $a39);
        
        return $array1[$input];
        
}

function getOccupationNumber ()
{
        $number = rand(0, 99);
        return $number;
}

function getOccupationArray($input)
{
        $occupationArray = array();
        $occupationNum = 0;

        if($input == 0)
        {
                $occupationNum = 0;
        }

        if($input == 1)
        {
                $occupationNum = 1;
        }

        if($input == 2)
        {
                $occupationNum = 2;
        }

        if($input == 3)
        {
                $occupationNum = 3;
        }

        if($input == 4)
        {
                $occupationNum = 4;
        }

        if($input == 5)
        {
                $occupationNum = 5;
        }
        
        if($input == 6)
        {
                $occupationNum = 6;
        }

        if($input == 7)
        {
                $occupationNum = 7;
        }

        if($input == 8)
        {
                $occupationNum = 8;
        }

        if($input == 9)
        {
                $occupationNum = 9;
        }

        if($input == 10)
        {
                $occupationNum = 10;
        }

        if($input >= 11 && $input <= 22)
        {
                $occupationNum = 11;
        }

        if($input == 23)
        {
                $occupationNum = 12;
        }

        if($input == 24)
        {
                $occupationNum = 13;
        }

        if($input >= 25 && $input <= 46)
        {
                $occupationNum = 14;
        }

        if($input == 47)
        {
                $occupationNum = 15;
        }

        if($input == 48)
        {
                $occupationNum = 16;
        }

        if($input == 49)
        {
                $occupationNum = 17;
        }

        if($input == 50)
        {
                $occupationNum = 18;
        }

        if($input == 51)
        {
                $occupationNum = 19;
        }

        if($input == 52)
        {
                $occupationNum = 20;
        }

        if($input == 53)
        {
                $occupationNum = 21;
        }

        if($input == 54)
        {
                $occupationNum = 22;
        }

        if($input >= 55 && $input <= 59)
        {
                $occupationNum = 23;
        }

        if($input == 60)
        {
                $occupationNum = 24;
        }

        if($input >= 61 && $input <= 71)
        {
                $occupationNum = 25;
        }


        if($input == 72)
        {
                $occupationNum = 26;
        }

        if($input == 73)
        {
                $occupationNum = 27;
        }

        if($input >= 74 && $input <= 85)
        {
                $occupationNum = 28;
        }
        
        if($input == 86)
        {
                $occupationNum = 29;
        }

        if($input == 87)
        {
                $occupationNum = 30;
        }
        
        if($input == 88)
        {
                $occupationNum = 31;
        }

        if($input == 89)
        {
                $occupationNum = 32;
        }
        
        if($input == 90)
        {
                $occupationNum = 33;
        }

        if($input == 91)
        {
                $occupationNum = 34;
        }
        
        if($input == 92)
        {
                $occupationNum = 35;
        }

        if($input == 93)
        {
                $occupationNum = 36;
        }

        if($input >= 94 && $input <= 97)
        {
                $occupationNum = 37;
        }

        if($input == 98)
        {
                $occupationNum = 38;
        }

        if($input == 99)
        {
                $occupationNum = 39;
        }



        $occupationArray = getOccupation($occupationNum);

        return $occupationArray;

}



function getBird()
{
        $bird = array(" (wool-beast)", " (load-beast)", " (aquatic bird-beast)", " (small meat-beast)", " (load-beast)", " (small riding-beast)");

        shuffle($bird);

        return $bird[0];
}

function getCartContents()
{
        $contents = array(" (containing a hay bale)", " (containing a tobacco stick bundle)", " (containing 20 ears of corn)", " (containing 1 bushel of chicken eggs)", " (containing compost)", " (containing your aged mother)");

        shuffle($contents);

        return $contents[0];
}


?>