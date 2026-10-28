<?php 
    for($i = 0;$i < 10; $i++){
        $resp = (int)readline(false);
        if($resp == 0 || !is_int($resp)){
            echo("↳ neutro \n");
        }
        else if($resp > 0){
            echo "↳ positivo \n";
        } else {
            echo "↳ negativo \n";
        }
    }