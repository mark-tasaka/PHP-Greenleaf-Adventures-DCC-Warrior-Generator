<?php

function getWealth($input)
{
    $wealth = '';
    $copper = 0;
    $silver = 0;
    $gold = 0;
    $electrum = 0;
    $platnum = 0;

    
    if($input == 2)
    {
        for($k = 0; $k < 3; ++$k)
        {
            $copperCoin = rand(1, 12);
            $copper += $copperCoin;
        }
        
        for($i = 0; $i < 3; ++$i)
        {
            $silverCoin = rand(1, 12);
            $silver += $silverCoin;
        }
        
        for($m = 0; $m < 3; ++$m)
        {
            $goldCoin = rand(1, 12);
            $gold += $goldCoin;
        }

        $wealth = $gold . ' gold, ' . $silver . ' silver & ' . $copper  . ' copper pieces';
    }
    
    if($input == 3)
    {
        for($i = 0; $i < 6; ++$i)
        {
            $silverCoin = rand(1, 12);
            $silver += $silverCoin;
        }
        
        for($m = 0; $m < 6; ++$m)
        {
            $goldCoin = rand(1, 12);
            $gold += $goldCoin;
        }

        $wealth = $gold . ' gold & ' . $silver . ' silver pieces';
    }
    
    if($input == 4)
    {
        for($i = 0; $i < 8; ++$i)
        {
            $goldCoin = rand(1, 12);
            $gold += $goldCoin;
        }
        
        for($m = 0; $m < 3; ++$m)
        {
            $electrumCoin = rand(1, 6);
            $electrum += $electrumCoin;
        }

        $wealth = $electrum . ' electrum & ' . $gold . ' gold pieces';
    }
    
    if($input == 5)
    {
        for($i = 0; $i < 6; ++$i)
        {
            $goldCoin = rand(1, 12);
            $gold += $goldCoin;
        }
        
        for($m = 0; $m < 3; ++$m)
        {
            $electrumCoin = rand(1, 10);
            $electrum += $electrumCoin;
        }
        
        for($m = 0; $m < 2; ++$m)
        {
            $platnumCoin = rand(1, 6);
            $platnum += $platnumCoin;
        }

        $wealth = $platnum . ' platnum, ' . $electrum . ' electrum & ' . $gold . ' gold pieces';
    }

    return $wealth;

}


?>