<?php

class Forma {
    public function desenhar() {
        echo "Desenhando forma genérica.";
    }
}

class Circulo extends Forma {
    public function desenhar() {
        echo "Desenhando um círculo.";
    }
}

class Quadrado extends Forma {
    public function desenhar() {
        echo "Desenhando um quadrado.";
    }
}

$formas = [new Circulo(), new Quadrado()];

foreach ($formas as $forma) {
    $forma->desenhar();
    echo "<br>";
}

?>