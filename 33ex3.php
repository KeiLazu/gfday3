<!-- 3.
Write a function to display the middle character of a string. 
Note: a) If the length of the string is odd there will be two middle characters.
b) If the length of the string is even there will be one middle character.
Test Data:
Input a string: 350 
Expected Output:
The middle character in the string: 5 -->

<?php
    function getMiddle($stringInput)
    {
        $keiHolder = strlen($stringInput);

        $keiLimitUpper = - floor($keiHolder/2);

        echo "Data: " . $stringInput;

        if ($keiHolder % 2 == 0) {
            echo "\n" . "Result: " . substr(
                $stringInput, ($keiHolder/2) -1, $keiLimitUpper + 1
            );

        } else {
            echo "\n" . "Result: " . substr(
                $stringInput, ($keiHolder/2), $keiLimitUpper
            );

        }

    }

    getMiddle(12345678);

?>