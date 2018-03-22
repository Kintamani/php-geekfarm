<?php
//calculate square area
function squareArea($width, $height)
{
    $total = $width * $height;
    return $total;//mengembalikan nilai ke pemanggil fungsi
}
//echo squareArea(2,4); //pemanggil

//add spaces by two char on a string
function addSpaces($string)
{
    return implode(' ', str_split($string, 2));
}
// echo addSpaces("naikmotorkebandung");

//split middle part of a string
function splitString($string)
{
    $length = strlen($string);
    if ($length % 2 == 0) {
        return substr($string, $length / 2 - 1, 2);
    } else {
        return substr($string, floor($length / 2), 1);
    }
}
// echo splitString("gammes");

//Count vowels
function countVowels($string)
{
    $vowels = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');
    $exploded = explode(" ", $string);

    foreach ($exploded as $value) {
        // Reset the counter for each word
        $count_vowels = 0;
        for ($i = 0; $i < strlen($value); $i++) {
            if (in_array($value[$i], $vowels)) {
                $count_vowels++;
            }
        }
        return $count_vowels;
    }
}
// echo countVowels("KenixMainGames");

//Count all words
function countWords($words)
{
    return str_word_count($words);
}


//Investment count (by reference)
function investmentCount(&$ammount, $interest)
{
    $ammount += $interest;
    return floor($ammount);
}
$ammount = 1000000;
$interestRate = 0.1;
$interest = $ammount * $interestRate;
$length = 5;

echo "\nAmmount of investment: $ammount\n";
echo "Interest rate: $interestRate\n";
echo "Length of investment: $length\n\n";
echo "Year\t\tTotal\n";
echo "----------------------------\n";
for ($i=1; $i <= $length ; $i++) {
  echo "$i\t\t".investmentCount($ammount, $interest)."\n";
}

//list of chars
function listChars($lowerLimit, $upperLimit)
{
    $convertLower = ord($lowerLimit);
    $convertUpper = ord($upperLimit);
    $count = 0;
        for ($i = $convertLower; $i < $convertUpper; $i++) {
            $count++;
            if ($count == 20) {
                echo chr($i);
            }
        }
}

listChars('A', 'P');


// echo chr(74);
// echo ord('%');
// $arrayName = array(4 => 'white',5 => 'black', );
// foreach ($arrayName as $key => $value){
//   if($key == 4)
//     echo $key;
// }
