<?php
    $day = $_POST["dd"];
    $month = $_POST["mm"];
    $year = $_POST["yyy"];

    $checkDay = false;
    for ($i = 1; $i <= 31; $i++){
        if($day == $i){
            $check_day = true;
            break;
        }
    }

    $check_month = false;
    for ($i = 1; $i <= 12; $i++){
        if($month == $i){
            $check_month = true;
            break;
        }
    }

    $check_year = false;
    for( $i = 1953 ; $i <=1998 ; $i++){
        if($year == $i){
            $check_year = true;
            break;
    }
    }

    if(empty($day) || empty($month) || empty($year)) { 
        echo ("Please Enter Your Date of Birth");
    }
    else if($check_day == false || $check_month == false || $check_year == false){
        echo ("Ivalid Date of Birth");    
    }
    else
    {
        echo("Your Date of Birth : " . $day ." / ". $month ." / ". $year);
    }
?>