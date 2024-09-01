<?php

// converção utilizando "val"

$numero = 1234;// Variavel int 
$str = strval($numero);// convertendo variavel para string 
echo $str;  // imprimindo variavel e mstring 

$booleano = true; //Variavel Booleana 
$str = strval($booleano); //Convertendo para string 
echo $str;  //Imprimindo em string 

// conversão utilizando type casting 

$numero = (int)"123";  // Converte "123" para 123
$texto = (string)123;  // Converte 123 para "123"


//Principais difernças entres as duas.

// o "val" é um metodo de conversão mais explicito com maior facilidade e oferece mais funções 

// o "type" é mais rapido e simples, porém mais dicil de poder se lêr 


strlen($texto); // o comando "strlen" é utilizado para ler o total de elementos em uma str. 
// Quando utilizado em um for mesmo sendo uma str os valores de cada indice serão quardados denteo de i 
