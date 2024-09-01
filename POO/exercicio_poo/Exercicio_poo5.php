<?php

$value = 123;
$str = strval($value);
$values = array();
$soma = 0;

for ($i = 0; $i <= strlen($str); $i++) {
    $values[] = $str[$i];
}

foreach($values as $final ){
    $soma += (int)$final;
}

echo "<hr>";
echo"O resultodo da soma dos algarismos $value é igual a $soma.";




