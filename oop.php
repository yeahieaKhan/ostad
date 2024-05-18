<?php

$strings = ["Hello", "World", "PHP", "Programming"];

function countVowelsAndReverse($string) {
  $vowels = "aeiouAEIOU";
  $vowelCount = 0;
  $reversedString = "";
  $stringCount = strlen($string); // Corrected variable name

  for ($i = 0; $i < $stringCount; $i++) {
    $char = $string[$i];
    if (strpos($vowels, $char) !== false) {
      $vowelCount++;
    }
    $reversedString = $char . $reversedString;
  }

  return array($vowelCount, $reversedString);
}

foreach ($strings as $string) {
  list($vowelCount, $reversedString) = countVowelsAndReverse($string);
  echo ($string ."</br>") ;
  echo ($reversedString ."</br>");
  echo ($vowelCount ."</br>");
}



