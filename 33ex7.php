<!-- 7.
Write a function to print characters between two characters (i.e. A to P ). 
Note: Prints 20 characters per line
Expected Output:
( ) * + , - . / 0 1 2 3 4 5 6 7 8 9 : ;                  
< = > ? @ A B C D E F G H I J K L M N O                  
P Q R S T U V W X Y Z [ \ ] ^ _ ` a b c                  
d e f g h i j k l m n o p q r s t u v w                  
x y z -->

<?php

    function printingChara($limitFloor = "(", $limitCeiling = "z")
    {
        $convertFloor = ord($limitFloor);
        $convertCeil = ord($limitCeiling);

        for ($i=$convertFloor; $i < $convertCeil+1; $i++) {

            if($convertFloor+20 == $i)
            {
                echo "\n";
                $convertFloor = $i;
            }

            $output = chr($i) . " ";
            
            // if ($convertFloor+20 == $i) {
            //     implode("\n", $output);
            // }

            echo $output;

        }

    }

    printingChara();

?>