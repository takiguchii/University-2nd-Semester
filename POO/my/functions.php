<?php
echo "<h1> Exercicio de funções </h1> <hr>";

function saudacao(string $name):void{
    echo "Primeira Função <br>";
    echo "Olá {$name} Muito Prazer em te conhecer <hr>" ;
}

$name = "Fern";
saudacao($name);


function soma(int $value1, $value2):void{
    $result = $value1+$value2;
    echo"Segunda função <br>";
    echo " O valor das soma de {$value1} e {$value2} e igual a: {$result} <hr>";
}

$value1 = 1;
$value2 = 2;
soma($value1,$value2);

function verificacao(int $number):void{
    echo"Terceira função <br>";
    if ($number % 2 == 0 ){
        echo" O Numero {$number} é par <hr>";
    }
    else{
        echo" O Numero {$number} é impar <hr>";
    }
}

$number = 3;
verificacao($number);

function calc(int $base, $altura):void{
    $A = $base * $altura / 2 ;
    echo"Quarta função <br>";
    echo "A Area do trinagulo é {$A} <hr>";
}

$base = 4;
$altura = 6;
calc($base,$altura);

function CountStr($frase,$vogais):void{
    for($i = 0; $i < strlen($frase);$i++){
        $letras[] = $frase[$i];
        if($letras[$i] == "a" or "e" or "i" or "o" or "u"){
            $letras[] = $vogais[$i];
        }
    }
    print_r($vogais);
} 

$vogais = [];
$letras = [];
$frase = "programar_e_como_escrevr_poema_para_aLogica";
CountStr($frase,$vogais);

