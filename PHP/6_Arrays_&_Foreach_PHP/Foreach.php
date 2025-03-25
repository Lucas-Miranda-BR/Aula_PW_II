<?php
$veiculos = [
    "Fusca",
    "Uno"
];

foreach ($veiculos as $key => $value) {
    echo "Chave: " . $key . "<br>";
    echo "Veículo: ". $value . "<br>";
}

$estacionamento = [

    [
        "nome" => "Fusca",
        "placa" => "ABC XYZ",
        "foto" => "https://istoedinheiro.com.br/wp-content/uploads/sites/17/2022/02/480162588628795-e1644881021502.jpg"
    ],

    [
        "nome" => "Uno",
        "placa" => "XYZ ABC",
        "foto" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQnLNsAsSJotOKrTUV-2pTEXx1cPcOle-Qryg&s"
    ],
    
];

echo "<h1> Estacionamento Aberto </h1>";

foreach ($estacionamento as $key => $veiculo) {

    echo "Veículo: " . $veiculo['nome'] . "<br>";
    echo "Placa: " . $veiculo['placa'] . "<br>";
    echo "Foto do veículo: <br>";
    echo '<img src="'. $veiculo["foto"] . '"> <br>';
    echo "<hr>";

}

?>