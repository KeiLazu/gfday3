<?php
    function addFun($number1, $number2)
    {
        $result = $number1 + $number2;
        echo "sum number 1 and number 2 is: " . $result;

    }

    addFun(10,20);
    echo "\n\n";

    function addFive($num) { 
        $num += 5; 
        echo "Adding Five: " . $num . "\n";

    } 
    
    function addSix(&$num) {
        $num += 6; 
    
    } 

    $orignum = 10; 
    echo "Normal: $orignum\n";
    addFive( $orignum ); 
    echo "Original Value is $orignum\n"; 
    addSix( $orignum ); 
    echo "Original Value is $orignum\n";

?>