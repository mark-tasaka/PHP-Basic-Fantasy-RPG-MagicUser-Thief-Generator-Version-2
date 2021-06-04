<?php

/*Magic-User/Thief*/

function experienceNextLevel ($level)
{
    $xp = "0";

    switch($level)
    {
        case 1:
            $xp = "3,750";
            break;
            
        case 2:
            $xp = "7,500";
            break;
            
        case 3:
            $xp = "15,000";
            break;
            
        case 4:
            $xp = "30,000";
            break;
            
        case 5:
            $xp = "60,000";
            break;
            
        case 6:
            $xp = "120,000";
            break;
            
        case 7:
            $xp = "225,000";
            break;
            
        case 8:
            $xp = "450,000";
            break;
            
        case 9:
            $xp = "675,000";
            break;
            
        case 10:
            $xp = "900,000";
            break;
            
        case 11:
            $xp = "1,050,000";
            break;
            
        case 12:
            $xp = "1,350,000";
            break;
            
        case 13:
            $xp = "1,575,000";
            break;
            
        case 14:
            $xp = "1,800,000";
            break;
            
        case 15:
            $xp = "2,025,000";
            break;
            
        case 16:
            $xp = "2,250,000";
            break;
            
        case 17:
            $xp = "2,475,000";
            break;
            
        case 18:
            $xp = "2,700,000";
            break;
            
        case 19:
            $xp = "2,925,000";
            break;
            
        case 20:
            $xp = "-----";
            break;
            
            
        default:
            $xp = "___";
            
    }
    
    return $xp;
}



function saveBreathAttacks ($level)
{
    $save = 0;
    
    if($level == 1)
    {
        $save = 16;
    }
    else if($level >= 2 && $level <= 3)
    {
        $save = 15;
    }
    else if($level >= 4 && $level <= 5)
    {
        $save = 14;
    }
    else if($level >= 6 && $level <= 7)
    {
        $save = 13;
    }
    else if($level >= 8 && $level <= 9)
    {
        $save = 12;
    }
    else if($level >= 10 && $level <= 11)
    {
        $save = 11;
    }
    else if($level >= 12 && $level <= 13)
    {
        $save = 10;
    }
    else if($level >= 14 && $level <= 15)
    {
        $save = 9;
    }
    else if($level >= 16 && $level <= 17)
    {
        $save = 8;
    }
    else if($level >= 18 && $level <= 19)
    {
        $save = 7;
    }
    else if($level == 20)
    {
        $save = 6;
    }
    return $save;
}

function savePoisonDeath ($level)
{
    $save = 0;
    
    
    if($level == 1)
    {
        $save = 13;
    }
    else if($level >= 2 && $level <= 3)
    {
        $save = 12;
    }
    else if($level >= 4 && $level <= 7)
    {
        $save = 11;
    }
    else if($level >= 8 && $level <= 9)
    {
        $save = 10;
    }
    else if($level >= 10 && $level <= 13)
    {
        $save = 9;
    }
    else if($level >= 14 && $level <= 15)
    {
        $save = 8;
    }
    else if($level >= 16 && $level <= 19)
    {
        $save = 7;
    }
    else if($level == 20)
    {
        $save = 6;
    }
    
    return $save;
}


function savePetrify ($level)
{
    $save = 0;
    
    if($level >= 1 && $level <= 3)
    {
        $save = 13;
    }
    else if($level >= 4 && $level <= 5)
    {
        $save = 12;
    }
    else if($level >= 6 && $level <= 7)
    {
        $save = 11;
    }
    else if($level >= 8 && $level <= 9)
    {
        $save = 10;
    }
    else if($level >= 10 && $level <= 13)
    {
        $save = 9;
    }
    else if($level >= 14 && $level <= 15)
    {
        $save = 8;
    }
    else if($level >= 16 && $level <= 17)
    {
        $save = 7;
    }
    else if($level >= 18 && $level <= 19)
    {
        $save = 6;
    }
    else if($level == 20)
    {
        $save = 5;
    }
    
    return $save;
}



function saveWand ($level)
{
    $save = 0;
    
    
    if($level >= 1 && $level <= 3)
    {
        $save = 14;
    }
    else if($level >= 4 && $level <= 5)
    {
        $save = 13;
    }
    else if($level >= 6 && $level <= 7)
    {
        $save = 12;
    }
    else if($level >= 8 && $level <= 9)
    {
        $save = 11;
    }
    else if($level >= 10 && $level <= 13)
    {
        $save = 10;
    }
    else if($level >= 14 && $level <= 15)
    {
        $save = 9;
    }
    else if($level >= 16 && $level <= 17)
    {
        $save = 8;
    }
    else if($level >= 18 && $level <= 19)
    {
        $save = 7;
    }
    else if($level == 20)
    {
        $save = 6;
    }
    return $save;
}



function saveSpell ($level)
{
    $save = 0;
    
    
    if($level == 1)
    {
        $save = 15;
    }
    else if($level >= 2 && $level <= 3)
    {
        $save = 14;
    }
    else if($level >= 4 && $level <= 7)
    {
        $save = 13;
    }
    else if($level >= 8 && $level <= 9)
    {
        $save = 12;
    }
    else if($level >= 10 && $level <= 13)
    {
        $save = 11;
    }
    else if($level >= 14 && $level <= 15)
    {
        $save = 10;
    }
    else if($level >= 16 && $level <= 19)
    {
        $save = 9;
    }
    else if($level == 20)
    {
        $save = 8;
    }
    return $save;
}



?>