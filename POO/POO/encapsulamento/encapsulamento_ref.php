<?php 

// EXPLICANDO O CONCEITO DE ENCAPSULAMENTO

// Encapsulamento é um dos pilares da POO. Ele serve para proteger os atributos
// e métodos de uma classe, permitindo que sejam acessados de maneira controlada.
// Isso é feito usando modificadores de acesso como `private`, `public` e `protected`.

// Aqui, criamos uma classe chamada "Pessoa", e vamos encapsular os dados privados
// (nome e idade) usando getters e setters.

class Pessoa {
    // Atributos privados só podem ser acessados de dentro da classe.
    private string $nome;
    private int $idade;

    // Getter: método que retorna o valor de um atributo privado.
    // Aqui, o getter "getNome" retorna o nome da pessoa.
    public function getNome(): string {
        return $this->nome; // `$this->nome` se refere ao atributo privado "nome".
    }

    // Setter: método que altera o valor de um atributo privado.
    // No setter "setNome", podemos adicionar uma validação, como no exemplo:
    public function setNome(string $nome): void {
        // Se o nome for vazio, definimos um valor padrão:
        if (empty($nome)) {
            $this->nome = "Nome inválido";
        } else {
            $this->nome = $nome;
        }
    }

    // Getter para a idade, retornando o valor do atributo "idade".
    public function getIdade(): int {
        return $this->idade;
    }

    // Setter para a idade, com validação para não permitir valores negativos.
    public function setIdade(int $idade): void {
        if ($idade < 0) {
            $this->idade = 0; // Se a idade for negativa, definimos como 0.
        } else {
            $this->idade = $idade;
        }
    }

    // Método para apresentar a pessoa, usando os atributos encapsulados.
    public function apresentar(): void {
        echo "Olá, meu nome é {$this->nome} e tenho {$this->idade} anos.";
    }
}

// Criando um objeto da classe Pessoa (instância)
$pessoa1 = new Pessoa();

// Utilizando os setters para alterar os atributos privados
$pessoa1->setNome("João");
$pessoa1->setIdade(25);

// Utilizando o método para apresentar os dados encapsulados
$pessoa1->apresentar(); // Saída: Olá, meu nome é João e tenho 25 anos.

?>
