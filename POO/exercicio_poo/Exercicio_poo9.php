<?php 
$small= 0;
$big = 0;

for ($i = 1; $i <= 10; $i++) {
    $number = rand(1, 100);

    if ($number > $big) {
        $big = $number;
    }
    if ($i == 0 || $number < $menor) {
        $small= $number;
    }
}

echo "<br>big value: $big<br>";
echo "small value: $small";