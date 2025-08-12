<?php

class Carro {
    public $marca;
    public $modelo;

    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function info() {
        echo "Carro: $this->marca $this->modelo";
    }
}

$meuCarro = new Carro("Toyota", "Corolla");
$meuCarro->info();

?>
