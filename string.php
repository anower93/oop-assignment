<?php

$strings = ["Hello", "World", "PHP", "Programming"];

function countVowels($string) {
    $count = 0; 
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    for ($i = 0; $i < strlen($string); $i++) {
        
        if (in_array($string[$i], $vowels)) {
            $count++; 
        }
    }
    return $count; 
}


foreach ($strings as $string) {
    $vowelCount = countVowels($string);
    $reversedString = strrev($string);
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}
?>