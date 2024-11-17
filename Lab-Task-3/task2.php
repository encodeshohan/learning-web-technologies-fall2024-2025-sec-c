<?php
    $amount = 350;
    $vatPercentage = 15/100;
    $vat = $amount * $vatPercentage;

    echo("Amount: ". $amount. "<br>");
    echo("VAT Percentage: ". $vatPercentage. "<br>");

    echo("<br>");

    echo("VAT over the Amount: ". $vat);
?>