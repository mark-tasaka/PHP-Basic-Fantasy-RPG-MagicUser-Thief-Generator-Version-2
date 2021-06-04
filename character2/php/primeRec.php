<?php


function primeReq($abilityScore, $intelligence)
{
    $message = "";
    
    if($abilityScore >= 3 && $abilityScore <=5 || $intelligence >= 3 && $intelligence <=5)
        {
            $message = "<br/><br/>-10% Experience Point Adjustment (Prime Requisite)";
        }
    else if($abilityScore >= 6 && $abilityScore <=8 || $intelligence >= 6 && $intelligence <=8)
        {
            $message = "<br/><br/>-5% Experience Point Adjustment (Prime Requisite)";
        }
    else if($abilityScore >= 13 && $abilityScore <=15 && $intelligence >= 13 && $intelligence <=15)
        {
            $message = "<br/><br/>+5% Experience Point Adjustment (Prime Requisite)";
        }
    else if($abilityScore >= 16 && $abilityScore <=18 && $intelligence >= 16 && $intelligence <=18)
        {
            $message = "<br/><br/>+10% Experience Point Adjustment (Prime Requisite)";
        }
    
    return $message;
}


function secondAttack($level)
{
    $message = "";
    
    if($level >= 15)
        {
            $message = "<br/><br/>Fighter has 2 attacks per round.";
        }
    
    return $message;
}

?>