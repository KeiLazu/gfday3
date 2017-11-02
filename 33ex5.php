<!-- 5.
Write a function to count all words in a string. 
Test Data:
Input the string: The quick brown fox jumps over the lazy dog.
Expected Output:
Number of words in the string: 9 -->

<?php
    function getWord($inputString = null)
    {
        $wordCounter = str_word_count($inputString);
        echo "Word counted: " . $wordCounter . " \nin: \n" . $inputString;

    }

    getWord("The quick brown fox jumps over the lazy dog.");

?>