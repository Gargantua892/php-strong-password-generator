<?php
        
        // Variabili
        $passLength = $_GET['pass'];

        // Funzioni
        function random_password($random){

            $random_characters = $random;
          
                $lower_case = "abcdefghijklmnopqrstuvwxyz";
                $upper_case = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                $numbers = "1234567890";
                $symbols = "!@#$%^&*";
              
                $lower_case = str_shuffle($lower_case);
                $upper_case = str_shuffle($upper_case);
                $numbers = str_shuffle($numbers);
                $symbols = str_shuffle($symbols);
              
                $random_password_tmp = substr($lower_case, 0, $random_characters);
                $random_password_tmp .= substr($upper_case, 0, $random_characters);
                $random_password_tmp .= substr($numbers, 0, $random_characters);
                $random_password_tmp .= substr($symbols, 0, $random_characters);

                $random_password_tmp = str_shuffle($random_password_tmp);

                return var_dump(substr($random_password_tmp, 0, $random_characters));

                //   substr($random_password_tmp, 0, $random_characters);


         }
    ?>   