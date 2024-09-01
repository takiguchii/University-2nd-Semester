<?php 

date_default_timezone_set('america/Sao_paulo');

/**
 * Sempre que for definir nome de variaveis definir sem utilizar "_" por boa pratica.
 * 
 * function nomeDaVarialvel()
 * Logica
 * return $variavel -> não é obrigatorio 
 * 
 * 
 */

function ola(string $nome):void{
    echo "Olá {$nome}, seja bem vindo ao sistema <br>";
}



function oi(string $nome, int $idade):string{
    if($idade >=18){
        return "Oi {$nome}, Acesso liberado";
    }
    else{
        return "oi {$nome} vc não tem a idade o Suficiente ";
    }
}

echo oi("guilherme", 18);
echo "<hr>";

//data nascimento = yy-mm-dd
function calculaIdade(string $dataNascimento):int{
    $dataAtual = date('Y');
    $dataNascimento = date('Y',strtotime($dataNascimento));
    return $dataAtual - $dataNascimento;

}

echo calculaIdade("1999-12-12");
echo "<hr>";

function validaAceso(string $nascimento):bool{
    if (calculaIdade($nascimento) >= 18){
        return true;
    }
}

echo validaAceso("1999-12-12");

function login(string $nome, string $datanascimento):void{
    $idade = $calculaidade($datanascimento);

    if (validaAceso(($datanascimento))){
        echo"Olá {$nome}, Você tem {$idade} anos e seu acesso é liberado <br>";
    }
    else{
        $falta = 18 - $idade;
        echo "Olá {$nome}, Acesso não liberado pela {$falta}";
    }

}

$login("joao, 1999-08-12");