<?php
    include '../../config/connection.php';
    include 'userHeader.php';
    include 'userFooter.php';

    if($_SERVER['REQUEST_METHOD'] == 'GET') {
        
        $advertId = isset($_POST['advertId']) ? $_POST['advertId'] : exit();
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
    
        if (empty($advertId)) {
            echo 'É necessário informar o ID.';
            exit();
        }

        if (empty($tituloAnuncio)) {
            echo 'É necessário informar o titulo.';
            exit();
        }

        if (empty($descricaoAnuncio)) {
            echo 'É necessário informar a descrição.';
            exit();
        }

        if (empty($dataPublicacao)) {
            echo 'É necessário informar a data de publicação.';
            exit();
        }

        if (empty($marcaVeiculo)) {
            echo 'É necessário informar a marca do veículo.';
            exit();
        }

        if (empty($modeloVeiculo)) {
            echo 'É necessário informar o modelo do veículo.';
            exit();
        }

        if (empty($anoVeiculo)) {
            echo 'É necessário informar o ano do veículo.';
            exit();
        }

        if (empty($corVeiculo)) {
            echo 'É necessário informar a cor do veículo.';
            exit();
        }

        if (empty($placaVeiculo)) {
            echo 'É necessário informar a placa do veículo.';
            exit();
        }

        if (empty($nomeProprietario)) {
            echo 'É necessário informar o nome do proprietario.';
            exit();
        }

        if (empty($telefoneProprietario)) {
            echo 'É necessário informar o telefone do proprietario.';
            exit();
        }

        $stmt = $pdo -> prepare('SELECT * FROM advertinfo WHERE advertId=:advertId');
        $stmt -> bindParam(':advertId', $advertId);
        $stmt -> execute();
        $advertInfoFetch = $stmt -> fetchAll();

        
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $advertId = isset($_POST['advertId']) ? $_POST['advertId'] : exit();
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
    
    
        if (empty($advertId)) {
            echo 'É necessário informar o ID.';
            exit();
        }

        if (empty($tituloAnuncio)) {
            echo 'É necessário informar o titulo.';
            exit();
        }

        if (empty($descricaoAnuncio)) {
            echo 'É necessário informar a descrição.';
            exit();
        }

        if (empty($dataPublicacao)) {
            echo 'É necessário informar a data de publicação.';
            exit();
        }

        if (empty($marcaVeiculo)) {
            echo 'É necessário informar a marca do veículo.';
            exit();
        }

        if (empty($modeloVeiculo)) {
            echo 'É necessário informar o modelo do veículo.';
            exit();
        }

        if (empty($anoVeiculo)) {
            echo 'É necessário informar o ano do veículo.';
            exit();
        }

        if (empty($corVeiculo)) {
            echo 'É necessário informar a cor do veículo.';
            exit();
        }

        if (empty($placaVeiculo)) {
            echo 'É necessário informar a placa do veículo.';
            exit();
        }

        if (empty($nomeProprietario)) {
            echo 'É necessário informar o nome do proprietario.';
            exit();
        }

        if (empty($telefoneProprietario)) {
            echo 'É necessário informar o telefone do proprietario.';
            exit();
        }

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
        Header("Location: read.php");

    }

?>

<fieldset>
    <legend>Editar anúncio</legend>

    <form action="update.php" method="POST">

        <input type="hidden" name="advertId" value="<?php echo $advertInfoFetch[0]["advertId"]; ?>">

        <label for="tituloAnuncio">Tituolo do anúncio</label>
        <input type="text" name="tituloAnuncio" id="tituloAnuncio" required <?php echo $advertInfoFetch[0]["tituloAnuncio"]; ?> autocomplete="off">

        <br><br>

        <label for="descricaoAnuncio">Descrição do anúncio</label>
        <input type="text" name="descricaoAnuncio" id="descricaoAnuncio" required <?php echo $advertInfoFetch[0]["descricaoAnuncio"]; ?> autocomplete="off">

        <br><br>

        <label for="dataPublicacao">Data de publicação</label>
        <input type="date" name="dataPublicacao" id="dataPublicacao" required <?php echo $advertInfoFetch[0]["dataPublicacao"]; ?> autocomplete="off">

        <br><br>

        <label for="marcaVeiculo">Marca do veículo</label>
        <input type="text" name="marcaVeiculo" id="marcaVeiculo" required <?php echo $advertInfoFetch[0]["marcaVeiculo"]; ?> autocomplete="off">

        <br><br>

        <label for="modeloVeiculo">Modelo do veículo</label>
        <input type="text" name="modeloVeiculo" id="modeloVeiculo" required <?php echo $advertInfoFetch[0]["modeloVeiculo"]; ?> autocomplete="off">

        <br><br>

        <label for="anoVeiculo">Ano do veículo</label>
        <input type="number" name="anoVeiculo" id="anoVeiculo" required <?php echo $advertInfoFetch[0]["anoVeiculo"]; ?> autocomplete="off">

        <br><br>

        <label for="corVeiculo">Cor do veículo</label>
        <input type="text" name="corVeiculo" id="corVeiculo" required <?php echo $advertInfoFetch[0]["corVeiculo"]; ?> autocomplete="off">

        <br><br>

        <label for="placaVeiculo">Placa do veículo</label>
        <input type="text" name="placaVeiculo" id="placaVeiculo" required <?php echo $advertInfoFetch[0]["placaVeiculo"]; ?> autocomplete="off">

        <br><br>

        <label for="nomeProprietario">Nome do proprietario</label>
        <input type="text" name="nomeProprietario" id="nomeProprietario" required <?php echo $advertInfoFetch[0]["nomeProprietario"]; ?> autocomplete="off">

        <br><br>

        <label for="telefoneProprietario">Telefone do proprietario</label>
        <input type="text" name="telefoneProprietario" id="telefoneProprietario" required <?php echo $advertInfoFetch[0]["telefoneProprietario"]; ?> autocomplete="off">

        <br><br>

        <button type="submit">Editar</button>
    </form>
</fieldset>