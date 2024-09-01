<?php 

// variavaies no php sempre começam com "$"
/**
 * Nomes de variaveis não devem iniciar com numeros e caracter especial
 * Exceto "_"
 */

 $nome = "Alexandre"; #string --> str --> texto 
 $idade = 28; #integer --> int --> numero inteiro 
 $altura = 1.81; #double --> float --> numero com casa decimal 

 echo $nome; #print saida em tela
 echo $idade;
 echo $altura;
 
 // concatenação e interpolação --> . 

 echo $nome.$altura.$idade . "<br>";
 echo $nome . " " . $altura . " " . $idade;
 echo "meu nome é " . $nome . "<br>";

 echo "Meu nome é {$nome}" . "<br>"; # interpolação

 $variavel =1;
 echo $variavel;
 $variavel ="1";
 echo $variavel;


