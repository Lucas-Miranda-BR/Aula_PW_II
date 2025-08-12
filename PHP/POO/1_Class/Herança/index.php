<?php

class Animal {
    public function falar() {
        echo "Som de animal genérico";
    }
}

class Cachorro extends Animal {
    public function falar() {
        echo "Au Au!";
    }
}

$c = new Cachorro();
$c->falar();  // Saída: Au Au!

?>