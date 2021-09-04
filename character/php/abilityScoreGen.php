<?php

function roll3D6()
{
    
    $die1 = rand(1, 6);
    $die2 = rand(1, 6);
    $die3 = rand(1, 6);

    return $die1 + $die2 + $die3;
}


function roll4D6()
{
    $abilityScores = 0;

    $die1 = rand(1, 6);
    $die2 = rand(1, 6);
    $die3 = rand(1, 6);
    $die4 = rand(1, 6);

    $dieRollArray = array($die1, $die2, $die3, $die4);

    rsort($dieRollArray);

    for($i = 0; $i < 3; ++$i)
    {
        $abilityScores += $dieRollArray[$i];
    }

    return $abilityScores;

}


function roll5D6()
{
    $abilityScores = 0;

    $die1 = rand(1, 6);
    $die2 = rand(1, 6);
    $die3 = rand(1, 6);
    $die4 = rand(1, 6);
    $die5 = rand(1, 6);

    $dieRollArray = array($die1, $die2, $die3, $die4, $die5);

    rsort($dieRollArray);

    for($i = 0; $i < 3; ++$i)
    {
        $abilityScores += $dieRollArray[$i];
    }

    return $abilityScores;

}


function rollD5D6D7()
{
    
    $die1 = rand(1, 5);
    $die2 = rand(1, 6);
    $die3 = rand(1, 7);

    return $die1 + $die2 + $die3;
}


function roll2D6Plus6()
{
    
    $die1 = rand(1, 6);
    $die2 = rand(1, 6);

    return $die1 + $die2 + 6;
}



function rollAbilityScores($input)
{
    $abilityScores = 0;

    //Roll 3d6
    if($input == 1)
    {
        $abilityScores = roll3D6();
    }
    
    //Roll 4d6, drop the lowest
    if($input == 2)
    {
        $abilityScores = roll4D6();
    }

    //Roll 5d6, use the three highest
    if($input == 3)
    {
        $abilityScores = roll5D6();
    }
    
    //Roll 5d6, use the three highest
    if($input == 4)
    {
        $abilityScores = rollD5D6D7();
    }
    
    //Roll 2d6 + 6
    if($input == 5)
    {
        $abilityScores = roll2D6Plus6();
    }


    return $abilityScores;
}

function generationMethod ($abilityScore)
{
    $dice = array(0, 0, 0, 0);
    
    if($abilityScore == 1)
    {
        $dice = array(6, 3, 0, 0);
    }
    
    if($abilityScore == 2)
    {
        $dice = array(6, 4, 1, 0);
    }
    
    if($abilityScore == 3)
    {
        $dice = array(6, 2, 0, 6);
    }
    
    if($abilityScore == 4)
    {
        $dice = array(8, 2, 0, 2);
    }
    
    
    if($abilityScore == 5)
    {
        $dice = array(7, 2, 0, 4);
    }
    
    return $dice;
}

function generationMesssage ($abilityScore)
{
    $message = "";
    
    if($abilityScore == 1)
    {
        $message = "Ability Score Generation: 3d6";
    }
    
    if($abilityScore == 2)
    {
        $message = "Ability Score Generation: 4d6, drop the lowest.";
    }
    
    if($abilityScore == 3)
    {
        $message = "Ability Score Generation: 5d6, use the three highest rolls.";
    }
    
    if($abilityScore == 4)
    {
        $message = "Ability Score Generation: 1d5 + 1d6 + 1d7";
    }
    
    
    if($abilityScore == 5)
    {
        $message = "Ability Score Generation: 2d6 + 6";
    }
    
    return $message;
}


function getAbilityModifier($score)
{

    if($score == 3)
        {
            $modifier = -3;
        }
    else if($score >=4 && $score <=5)
          {
            $modifier = -2;
        }
    else if($score >=6 && $score <=8)
        {
            $modifier = -1;
        }
    else if($score >=9 && $score <=12)
        {
            $modifier = 0;
        }
    else if($score >=13 && $score <=15)
            {
                $modifier = 1;
            }        
    else if($score >=16 && $score <=17)
                {
                    $modifier = 2;
                }            
    else if($score == 18)
    {
        $modifier = 3;
    }

    return $modifier;
}

function getModSign($mod)
{
    if($mod >= 0)
    {
        return '+' . $mod;
    }
    else
    {
        return $mod;
    }
}


?>