4.
Write a function to count all vowels in a string. 
Test Data:
Input the string: Drink Water 
Expected Output:
Number of  Vowels in the string: 3

<?php
    // $string = "This is some text with some more text and even more text.";
    // echo "There are \n".
    // preg_match_all('/[aeiou]/i',$string,$matches).
    // " \nvowels in the string \n".
    // $string;

    function getVowel($inputString = null)
    {
        $getCountVowel = preg_match_all('/[aeiou]/i', $inputString);

        echo "Number of Vowels in the string: " . $getCountVowel . " \nin: " . 
        $inputString;
    }

    getVowel("Drink WAter");

?>