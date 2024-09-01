<?php 

$insert_number = 10 ;

if ($insert_number >1 and $insert_number <=9){
    echo "<h3>The multiplication table of $i is:</h3>";
        for($j = 1; $j <= 10; $j++){
            echo "$insert_number x $j = ". $insert_number*$j. "<br>";
        }   
        echo"<hr>";
}
else{
    echo"<h1> Error...</h1>";
    echo"<p> Accepted numbers between 1 and 9. </p>";
}