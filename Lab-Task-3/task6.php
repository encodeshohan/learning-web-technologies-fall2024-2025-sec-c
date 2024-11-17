<?php
    $elements = [0, 5, 10, 15, 20, 25, 30];
    $search = 20;
    $isFound = false;
    $temp;

    echo("Arrary Elements: 0, 5, 10, 15, 20, 25, 30" . "<br>");
    echo("Search: " . $search . "<br>");

    echo("<br>");

    foreach ($elements as $temp)
    {
        if($temp == $search)
        {
            $isFound = true;
            break;
        }
    }
    
    if($isFound == true)
    {
        echo("Element " . $search . " Found");
    }
    else
    {
        echo("Element " . $search . " NOT Found");
    }
?>