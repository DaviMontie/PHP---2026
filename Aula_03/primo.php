<?php
    $resp = 3;
    while($resp >= 2){
        $resp = readline("seu numero:");
        $primo = primos($resp);
        if($primo){
            print ("\nEle é primo\n\n");
        } else {
            print ("\nEle não é primo\n\n");
        }
    }

    function primos($n){
        for($i = $n-1; $i > 1; $i--){
            if($n%$i == 0){
                return false;
            }
        }
        return true;
    }