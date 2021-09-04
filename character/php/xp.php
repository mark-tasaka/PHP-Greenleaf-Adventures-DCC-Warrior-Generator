<?php

function getXPNextLevel ($level)
{
    $xpNext = "";


    switch ($level) 
    {
        case "1":
            $xpNext = "50";
          break;

        case "2":
            $xpNext = "110";
        break;
        
        case "3":
            $xpNext = "190";
        break;
        
        case "4":
            $xpNext = "290";
        break;
        
        case "5":
            $xpNext = "410";
        break;
        
        case "6":
            $xpNext = "550";
        break;        

        case "7":
            $xpNext = "710";
        break;
                
        case "8":
            $xpNext = "890";
        break;
                
        case "9":
            $xpNext = "1090";
        break;
                
        case "10":
            $xpNext = "---";
        break;

        default:
          $xpNext = " =P ";
      }

      return $xpNext;
}


?>