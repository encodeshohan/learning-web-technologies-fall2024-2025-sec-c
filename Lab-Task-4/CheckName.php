<?php
    if(isset($_POST['submit'])) 
    {
        $name = trim($_POST['name']);
        if(empty($name)) 
        {
            echo "Please Enter Your Name";
        } 
        elseif(!ctype_alpha($name[0])) {
            echo "Name Must Start With a Letter.";
        } 
        else 
        {
            $is_valid = true;
            $word_count = 0;
            $current_word = "";

            for($i = 0; $i < strlen($name); $i++) 
            {
                $char = $name[$i];

                if(ctype_alpha($char) || $char === '.' || $char === '-' || $char === ' ') 
                {
                    if($char !== ' ') 
                    {
                        $current_word = $current_word . $char;
                    } 
                    else 
                    {
                        if(!empty($current_word)) 
                        {
                            $word_count++;
                            $current_word = "";
                        }
                    }
                } 
                else 
                {
                    $is_valid = false;
                    break;
                }
            }

            if(!empty($current_word)) 
            {
                $word_count++;
            }

            if(!$is_valid) 
            {
                echo "Name Can Only Contain A-z, a-z, Periods & Dashes.";
            } 
            elseif($word_count < 2) 
            {
                echo("Name Must Contain at least Two Words.");
            } 
            else 
            {
                echo("Name : " . $name);
            }
        }
    }
?>