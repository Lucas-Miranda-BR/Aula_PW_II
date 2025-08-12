<?php

class Pessoa {
    public $nome;
    public $idade;

    public function apresentar() {
        echo "Olá, meu nome é $this->nome e tenho $this->idade anos.";
    }
}

$p = new Pessoa();
$p -> nome = "João";
$p -> idade = 30;
$p -> apresentar();

?>