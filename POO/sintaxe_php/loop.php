<br>
<?php 


$lista = [1,2,3,4,5,6,7,8,9];
$lista2 = [1,2,4,5,6,7];

//para a iterar um array em php 
//for, while, foreach 

//echo count --> mostra todos os elementos que possuem no array 
echo count($lista);

echo "<br>" . "<hr>" ."<br>";

//while 
//$lista = 1;
//while ($lista < count($lista2)) {
//    echo $lista2[$lista];
//    $lista++;
//}

echo "<br>" . "<hr>" ."<br>";

$notas = [8,7,6,9];
echo " As Notas são " ; 

for($i = 0;$i < count($notas);$i++){
    echo "{$notas[$i]}, ";
    $soma += $notas[$i];
}
echo "<br>";
$media  = $soma/count($notas);
echo $media;
echo "<br>" . "<hr>" ."<br>";

//foreach(transforma lista em elemento) --> para cada elemento do array faça
foreach($notas as $nota){
    echo "{$nota},";
    $soma += $nota;
}
$media = $soma/count($notas);
echo $media;


//for 
//$i = 1;
//for ($i = 1; $i <= 5; $i++) {
//    echo $i . " ";
//}