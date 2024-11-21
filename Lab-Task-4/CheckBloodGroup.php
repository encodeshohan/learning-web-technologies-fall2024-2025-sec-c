<?php
    if(isset($_POST["bloodGroup"])){
        $blood = $_POST["bloodGroup"];
        echo("Selected Blood Group:  " . $blood);
    }
    else{
        echo ("Please Select a Blood Group");
    }
?>