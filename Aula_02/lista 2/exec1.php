<?php
    $resp=readline("informe o nmr: ");
    if($resp > 0){
        echo $resp*2 . "\n";
    } else {
        echo $resp*3 . "\n";
    }