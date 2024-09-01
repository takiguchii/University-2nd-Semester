<hr>
<?php 
// lista em php é chamado de array 
// forma mais antiga 
$lista = array();

//forma mais nova 
$lista = [10,9,8,7,6,5,4,3,2,1];
var_dump($lista);

// echo "$lista"; --> não funciona 
//print_r --> imprimi a lista por completo. 
print_r ($lista."<br>"."<hr>"."<br>");

// array_sum --> soma todos os elementos do array 
var_dump(array_sum($lista));