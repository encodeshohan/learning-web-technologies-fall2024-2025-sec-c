<?php
    if (isset($_POST["gender"])) {  
        $gender = $_POST["gender"];
        echo($gender . " Selected");
    } else {
        echo "Please Select at least One Option";
    }
?>