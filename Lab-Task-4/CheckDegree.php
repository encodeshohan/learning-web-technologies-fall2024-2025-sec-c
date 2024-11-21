<?php
    $arrayLength = count($_POST);
    if( $arrayLength < 2){
        echo("Please Select at least 2 Degree");
    }
    else
    {
        echo("You Selected ". $arrayLength-1 ." Degree");
    }
?>