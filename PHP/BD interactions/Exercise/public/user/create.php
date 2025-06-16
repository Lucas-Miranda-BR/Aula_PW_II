<?php
include '../../config/connection.php';
?>

<fieldset>
    <legend>Criar anúncios</legend>

    <form action="create.php" method="POST">
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
        <input type="text" name="telefoneProprietario" id="telefoneProprietario" required autocomplete="off">

        <br><br>

        <button type="submit">Criar</button>
    </form>
</fieldset>

<?php

    $tituloAnuncio = isset($_POST['tituloAnuncio']) ? $_POST['tituloAnuncio'] : exit();
    $descricaoAnuncio = isset($_POST['descricaoAnuncio']) ? $_POST['descricaoAnuncio'] : exit();
    $dataPublicacao = isset($_POST['dataPublicacao']) ? $_POST['dataPublicacao'] : exit();
    $marcaVeiculo = isset($_POST['marcaVeiculo']) ? $_POST['marcaVeiculo'] : exit();
    $modeloVeiculo = isset($_POST['modeloVeiculo']) ? $_POST['modeloVeiculo'] : exit();
    $anoVeiculo = isset($_POST['anoVeiculo']) ? $_POST['anoVeiculo'] : exit();
    $corVeiculo = isset($_POST['corVeiculo']) ? $_POST['corVeiculo'] : exit();
    $placaVeiculo = isset($_POST['placaVeiculo']) ? $_POST['placaVeiculo'] : exit();
    $nomeProprietario = isset($_POST['nomeProprietario']) ? $_POST['nomeProprietario'] : exit();
    $telefoneProprietario = isset($_POST['telefoneProprietario']) ? $_POST['telefoneProprietario'] : exit();

    $stmt = $pdo -> prepare('INSERT INTO advertInfo (tituloAnuncio, descricaoAnuncio, dataPublicacao, marcaVeiculo, modeloVeiculo, anoVeiculo, corVeiculo, placaVeiculo, nomeProprietario, telefoneProprietario) VALUES (:tituloAnuncio, :descricaoAnuncio, :dataPublicacao, :marcaVeiculo, :modeloVeiculo, :anoVeiculo, :corVeiculo, :placaVeiculo, :nomeProprietario, telefoneProprietario)');

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
    $stmt->execute();

?>