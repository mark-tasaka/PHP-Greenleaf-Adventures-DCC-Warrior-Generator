<?php

function getGenderName($select)
{
    if($select == "0")
    {
        return "Male";
    }
    else if($select == "1")
    {
        return "Female";
    }
    else if($select == "2")
    {
        return "Other";
    }
    else
    {
        return "";
    }
}


function genderNameGeneration ($select)
{
    if($select == "0" || $select == "1")
    {
        return $select;
    } 
    else if($select == "2" || $select == "3")
    {
        $nameIdentify = rand(0, 1);
        return $nameIdentify;
    }
    else
    {
        return "Error";

    }
    
    
}

?>