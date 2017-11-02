<?php
    $numberString = "120831";

    for ($i=0; $i < strlen($numberString); $i += 2) { 
        $result = substr($numberString, $i, 2 );

        
    echo $result . " ";
    }

?>