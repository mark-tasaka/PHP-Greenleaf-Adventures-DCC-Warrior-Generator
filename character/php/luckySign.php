<?php

/* */


function getLuckySign($input)
{
        $a00 = array("0", "Harsh winter", "All attack rolls");
        $a01 = array("1", "The bull", "Melee attack rolls");
        $a02 = array("2", "Fortunate date", "Missle fire attack rolls");
        $a03 = array("3", "Raised by wolves", "Unarmed attack rolls");
        $a04 = array("4", "Conceived on horseback", "Mounted attack rolls");
        $a05 = array("5", "Born on the battlefield", "Damage rolls");
        $a06 = array("6", "Path of the bear", "Melee damage rolls");
        $a07 = array("7", "Hawkeye", "Missle damage rolls");
        $a08 = array("8", "Pack hunter", "Attack & damage rolls for 0-level starting weapon");
        $a09 = array("9", "Born under the loom", "Skill checks");
        $a10 = array("10", "Fox's cunning", "Find/disable traps");
        $a11 = array("11", "Four-leafed clover", "Find secret doors");
        $a12 = array("12", "Seventh son", "Spell checks");
        $a13 = array("13", "The raging storm", "Spell damage");
        $a14 = array("14", "Righteous heart", "Turn unholy checks");
        $a15 = array("15", "Surived the plague", "Magical healing");
        $a16 = array("16", "Luck sign", "Saving throws");
        $a17 = array("17", "Guardian angel", "Saving throws to escape traps");
        $a18 = array("18", "Survived a spider bite", "Saving throws against poison");
        $a19 = array("19", "Struck by Lightning", "Reflex saving throws");
        $a20 = array("20", "Lived through famine", "Fortitude saving throws");
        $a21 = array("21", "Resisted temptation", "Will saving throws");
        $a22 = array("22", "Charmed house", "Armour class");
        $a23 = array("23", "Speed of the Cobra", "Initiative");
        $a24 = array("24", "Bountiful Harvest", "Hits points/each level");
        $a25 = array("25", "Warrior's arm", "Critical hit tables");
        $a26 = array("26", "Unholy house", "Corruption rolls");
        $a27 = array("27", "The Broken Star", "Fumbles");
        $a28 = array("28", "Birdsong", "Number of Languages");
        $a29 = array("29", "Wild child", "Speed");
        
        $array1= array($a00, $a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08, $a09, $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17, $a18, $a19, $a20, $a21, $a22, $a23, $a24, $a25, $a26, $a27, $a28, $a29);
        
        return $array1[$input];
        
}

function getBirthAugur()
{
        $select = rand(0, 29);

        $birthAugurArray = array();

        $birthAugurArray = getLuckySign($select);

        return $birthAugurArray;

}

function getSpeed($luckMod, $luckySign)
{
        $speedBonus = (5 * $luckMod);
        $baseSpeed = 30;

        if($luckySign == 29)
        {
               $baseSpeed += $speedBonus; 
        }

        return $baseSpeed;
}

function getCritMod($luckMod, $luckySign)
{
        $modBonus = (2 * $luckMod);
        $bonus = $luckMod;

        if($luckySign == 25)
        {
                $bonus = $modBonus;
        }

        if($bonus == 0)
        {
                $bonus = '';
        }

        return $bonus;

}

function getFumbleMod($luckMod, $luckySign)
{
        $modBonus = (2 * $luckMod);
        $bonus = $luckMod;

        if($luckySign == 27)
        {
                $bonus = $modBonus;
        }

        if($bonus == 0)
        {
                $bonus = '';
        }

        return $bonus;

}


function getInit($agiMod, $luckMod, $luckySign)
{
        $modBonus = $luckMod;
        $bonus = $agiMod;

        if($luckySign == 23)
        {
                $bonus += $modBonus;
        }

        return $bonus;

}

function getAC($agiMod, $luckMod, $luckySign)
{
        $modBonus = $luckMod;
        $bonus = (10 + $agiMod);

        if($luckySign == 22)
        {
                $bonus += $modBonus;
        }

        return $bonus;

}

function getHitPointLuck($luckMod, $luckySign)
{
        $bonus = 0;

        if($luckySign == 24)
        {
                $bonus += $luckMod;
        }

        return $bonus;
}

function minHitPoints($hp)
{
        if($hp <= 0)
        {
                $hp = 1;
        }

        return $hp;
}

function getRefLuckBonus($luckMod, $luckySign)
{
        $bonus = 0;

        if($luckySign == 16 || $luckySign == 19)
        {
                $bonus += $luckMod;
        }

        return $bonus;

}


function getFortLuckBonus($luckMod, $luckySign)
{
        $bonus = 0;

        if($luckySign == 16 || $luckySign == 20)
        {
                $bonus += $luckMod;
        }

        return $bonus;
}


function getWillLuckBonus($luckMod, $luckySign)
{
        $bonus = 0;

        if($luckySign == 16 || $luckySign == 21)
        {
                $bonus += $luckMod;
        }

        return $bonus;
}

function getLanguages($intMod, $luckMod, $luckySign)
{
        $language = 'Common';
        $bonusLanguages = 0;

        if($intMod > 0)
        {
                $bonusLanguages += $intMod;
        }

        if($luckySign == 28 && $luckMod > 0)
        {
                $bonusLanguages += $luckMod;
        }

        if($bonusLanguages === 1)
        {
                return $language . ' & ' . $bonusLanguages . ' additional language';
        }
        else if($bonusLanguages > 1)
        {
                return $language . ' & ' . $bonusLanguages . ' additional languages';
        }
        else
        {
                return $language;
        }

}


function meleeAttackLuckSign($luckMod, $luckySign)
{
        $bonus = 0;

        if($luckySign == 0 || $luckySign == 1)
        {
                $bonus += $luckMod;
        }

        return $bonus;
}


function missileAttackLuckSign($luckMod, $luckySign)
{
        $bonus = 0;

        if($luckySign == 0 || $luckySign == 2)
        {
                $bonus += $luckMod;
        }

        return $bonus;
}


function meleeDamageLuckSign($luckMod, $luckySign)
{
        $bonus = 0;

        if($luckySign == 5 || $luckySign == 6)
        {
                $bonus += $luckMod;
        }

        return $bonus;
}


function missileDamageLuckSign($luckMod, $luckySign)
{
        $bonus = 0;

        if($luckySign == 5 || $luckySign == 7)
        {
                $bonus += $luckMod;
        }

        return $bonus;
}





?>