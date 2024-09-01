<?php 

$insert_value = 10;

echo"<h1> The result </h1>";
for($i = 1; $i< $insert_value; $i++){
    echo $i;
    if($i % 4 == 0) {
        echo "<hr>";
    }
}