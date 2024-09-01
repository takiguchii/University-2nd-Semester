<?php

$Number = 123;
$str = strval($Number);
$Inverted = '';

for ($i = strlen($str) - 1; $i >= 0; $i--) {
    $Inverted .= $str[$i];
}
echo"<hr>";
echo "the number $Number inverted is $Inverted.";
echo"<hr>";