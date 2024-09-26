
<?php

class Terreno
{
    private float $lateral;
    private float $frente;
    private float $precoMetro;

    // método mágico - é executado toda vez que um novo objeto/instancia da classe é criado
    public function __construct($lateral, $frente, $preco) {
        $this->setLateral($lateral);
        $this->setFrente($frente);
        $this->setPrecoMetro($preco);
    }

    // getters and setters - modificadores de acesso
    public function getLateral(): float {
        return $this->lateral;
    }

    public function setLateral(float $lateral): void {
        if ($lateral <= 0) {
            $this->lateral = 0;
        } else {
            $this->lateral = $lateral;
        }
    }

    public function getFrente(): float {
        return $this->frente;
    }

    public function setFrente(float $frente): void {
        if ($frente <= 0) {
            $this->frente = 0;
        } else {
            $this->frente = $frente;
        }
    }

    public function getPrecoMetro(): float {
        return $this->precoMetro;
    } 

    public function setPrecoMetro(float $preco): void {
        if ($preco <= 0) {
            $this->precoMetro = 0;
        } else {
            $this->precoMetro = $preco;
        }
    }

    public function perimetro(): float {
        return 2 * ($this->frente + $this->lateral);
    }

    public function area(): float {
        return $this->frente * $this->lateral;
    }

    public function precoVenda(): float {
        return $this->area() * $this->precoMetro;
    }

}

$terr1 = new Terreno(25, 10.5, 520);
echo $terr1->precoVenda();