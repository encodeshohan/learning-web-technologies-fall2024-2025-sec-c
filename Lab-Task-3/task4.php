<?php
    $n1 = 15;
    $n2 = 90;
    $n3 = 60;

    echo("First Number: " . $n1 ."<br>");
    echo("Second Number: " . $n2 ."<br>");
    echo("Third Number: " . $n3 ."<br>");

    echo("<br>");
    
    if($n1>$n2 && $n1>$n3)
    {       
        echo("Number " . $n1 ." is Largest");
    }
    elseif($n2>$n1 && $n2>$n3)
    {
        echo("Number " . $n2 ." is Largest");
    }
    elseif($n3>$n1 && $n3>$n2)
    {
        echo("Number " . $n3 ." is Largest");
    }
?>