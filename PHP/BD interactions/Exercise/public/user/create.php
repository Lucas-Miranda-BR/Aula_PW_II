<?php
include '../../config/connection.php';
include 'userHeader.php';
include 'userFooter.php';
?>

<fieldset class="indie-flower-regular main-text-color main-bg-color">
<legend class="indie-flower-title content-align-center main-bg-color">Criar anúncios</legend>

    <div class="row">
    <form action="create.php" method="POST" class="container-bg-color">
        <label for="tituloAnuncio">Título do anúncio</label>
        <input type="text" name="tituloAnuncio" id="tituloAnuncio" required autocomplete="off">

        <br><br>

        <label for="descricaoAnuncio">Descrição do anúncio</label>
        <input type="text" name="descricaoAnuncio" id="descricaoAnuncio" required autocomplete="off">

        <br><br>

        <label for="dataPublicacao">Data de publicação</label>
        <input type="date" name="dataPublicacao" id="dataPublicacao" required autocomplete="off">

        <br><br>

        <label for="marcaVeiculo">Marca do veículo</label>
        <input type="text" name="marcaVeiculo" id="marcaVeiculo" required autocomplete="off">

        <br><br>

        <label for="modeloVeiculo">Modelo do veículo</label>
        <input type="text" name="modeloVeiculo" id="modeloVeiculo" required autocomplete="off">

        <br><br>

        <label for="anoVeiculo">Ano do veículo</label>
        <input type="number" name="anoVeiculo" id="anoVeiculo" required autocomplete="off">

        <br><br>

        <label for="corVeiculo">Cor do veículo</label>
        <input type="text" name="corVeiculo" id="corVeiculo" required autocomplete="off">

        <br><br>

        <label for="placaVeiculo">Placa do veículo</label>
        <input type="text" name="placaVeiculo" id="placaVeiculo" required autocomplete="off">

        <br><br>

        <label for="nomeProprietario">Nome do proprietário</label>
        <input type="text" name="nomeProprietario" id="nomeProprietario" required autocomplete="off">

        <br><br>

        <label for="telefoneProprietario">Telefone do proprietário</label>
        <input type="tel" name="telefoneProprietario" id="telefoneProprietario" required autocomplete="off">

        <br><br>

        <button type="submit">Criar</button>
    </form>
</fieldset>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tituloAnuncio = $_POST['tituloAnuncio'];
    $descricaoAnuncio = $_POST['descricaoAnuncio'];
    $dataPublicacao = $_POST['dataPublicacao'];
    $marcaVeiculo = $_POST['marcaVeiculo'];
    $modeloVeiculo = $_POST['modeloVeiculo'];
    $anoVeiculo = $_POST['anoVeiculo'];
    $corVeiculo = $_POST['corVeiculo'];
    $placaVeiculo = $_POST['placaVeiculo'];
    $nomeProprietario = $_POST['nomeProprietario'];
    $telefoneProprietario = $_POST['telefoneProprietario'];

    $stmt = $pdo->prepare('INSERT INTO advertinfo (
        tituloAnuncio,
        descricaoAnuncio,
        dataPublicacao,
        marcaVeiculo,
        modeloVeiculo,
        anoVeiculo,
        corVeiculo,
        placaVeiculo,
        nomeProprietario,
        telefoneProprietario
    ) VALUES (
        :tituloAnuncio,
        :descricaoAnuncio,
        :dataPublicacao,
        :marcaVeiculo,
        :modeloVeiculo,
        :anoVeiculo,
        :corVeiculo,
        :placaVeiculo,
        :nomeProprietario,
        :telefoneProprietario
    )');

    $stmt->bindParam(':tituloAnuncio', $tituloAnuncio);
    $stmt->bindParam(':descricaoAnuncio', $descricaoAnuncio);
    $stmt->bindParam(':dataPublicacao', $dataPublicacao);
    $stmt->bindParam(':marcaVeiculo', $marcaVeiculo);
    $stmt->bindParam(':modeloVeiculo', $modeloVeiculo);
    $stmt->bindParam(':anoVeiculo', $anoVeiculo);
    $stmt->bindParam(':corVeiculo', $corVeiculo);
    $stmt->bindParam(':placaVeiculo', $placaVeiculo);
    $stmt->bindParam(':nomeProprietario', $nomeProprietario);
    $stmt->bindParam(':telefoneProprietario', $telefoneProprietario);
    
    echo "<pre>";
echo "DEBUG: Checking parameter matching\n";
echo "SQL expects these parameters:\n";
print_r([
    ':tituloAnuncio',
    ':descricaoAnuncio',
    ':dataPublicacao',
    ':marcaVeiculo',
    ':modeloVeiculo',
    ':anoVeiculo',
    ':corVeiculo',
    ':placaVeiculo',
    ':nomeProprietario',
    ':telefoneProprietario'
]);

echo "\nPOST contains these values:\n";
print_r(array_keys($_POST));
echo "</pre>";
die();

    $stmt->execute();
}
?>
