<?php

$obj = new main();
$text="Proff Keith Williams";
$obj-> printthis($text);
$text_1="Thursday Class is Web Systems Development";
$obj-> str_word_count($text_1);
$obj-> str_shuffle($text_1);
$obj-> strlen($text_1);
$obj-> str_repeat($text_1);
class main{

public function __construct()
{
echo '<h1>IS601</h1><br>';
}
public function printthis($text)
{
echo '<h2>Web Systems Development</h2>';
print($text);
echo'<hr>';
}
public function str_word_count($text_1)
{
$output = str_word_count($text_1);
echo"How many words in the sentence: $text_1";
echo'<br>output--->'.$output;
echo'<hr>';
}
public function str_shuffle($text_1)
{
$output2 = str_shuffle($text_1);
echo"Shuffle the sentence:$text_1:<br>";
echo'<br>output--->'.$output2;
echo'<hr>';
}
public function strlen($text_1)
{
$output3 = strlen($text_1);
echo"Total no. of characters in the sentence : $text_1";
echo'<br>output--->'.$output3;
echo'<hr>';
}
public function str_repeat($text_1)
{
$output4 = str_repeat($text_1,2);
echo"Repeat the sentence Once:$text_1";
echo'<br>output--->'.$output4;
echo'<hr>';
}






}
?>
