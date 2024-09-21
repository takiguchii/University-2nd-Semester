<?php 
class bicicleta{
    public string $marca;
    public string $modelo;
    public string $material;
    public string $preco; 
    public int $aro; 
    public function info():void{
        echo "<h1> Informações: </h1> <hr> MARCA: {$this->marca} <br> MODELO:{$this->modelo} ";
        echo "<br> MATERIAL:{$this->material} <br> PREÇO:{$this->preco} <br> ARO:{$this->aro}";
    }
}
$bicicleta1 = new bicicleta();
$bicicleta1->marca = "Gts";
$bicicleta1->modelo = "Mountain Bike";
$bicicleta1->$material = "";
$bicicleta1->preco = "";
$bicicleta1->aro = 29;
$bicicleta1->info();