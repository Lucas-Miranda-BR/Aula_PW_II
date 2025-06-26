<?php
    include '../../config/connection.php';
    include 'userHeader.php';
    include 'userFooter.php';

    if($_SERVER['REQUEST_METHOD'] == 'GET') {
        
        $advertId = isset($_GET['advertId']) ? $_GET['advertId'] : exit();
        
        if (empty($advertId)) {
            echo 'É necessário informar o ID.';
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

        $stmt = $pdo -> prepare('UPDATE advertInfo SET 
        tituloAnuncio = :tituloAnuncio,
        descricaoAnuncio = :descricaoAnuncio,
        dataPublicacao = :dataPublicacao,
        marcaVeiculo = :marcaVeiculo,
        modeloVeiculo = :modeloVeiculo,
        anoVeiculo = :anoVeiculo,
        corVeiculo = :corVeiculo,
        placaVeiculo = :placaVeiculo,
        nomeProprietario = :nomeProprietario,
        telefoneProprietario = :telefoneProprietario
        WHERE advertId = :advertId');

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
        $stmt->bindParam(':advertId', $advertId);
        $stmt->execute();

        Header("Location: read.php");

    }

?>

<div class="container mt-5 mb-5">
    <fieldset class="border p-4 rounded indie-flower-regular main-text-color main-bg-color">
        <h1 class="border-0 indie-flower-title text-center main-bg-color w-auto px-3">Editar anúncio</h1>

        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <form action="update.php" method="POST" class="container-bg-color p-4 rounded">
                    <input type="hidden" name="advertId" value="<?php echo $advertInfoFetch[0]["advertId"]; ?>">
                    <div class="mb-3">
                        <label for="tituloAnuncio" class="form-label">Título do anúncio</label>
                        <input type="text" class="form-control" name="tituloAnuncio" id="tituloAnuncio" required <?php echo $advertInfoFetch[0]["tituloAnuncio"]; ?> autocomplete="off">
                    </div>

                    <div class="mb-3">
                        <label for="descricaoAnuncio" class="form-label">Descrição do anúncio</label>
                        <input type="text" class="form-control" name="descricaoAnuncio" id="descricaoAnuncio" required <?php echo $advertInfoFetch[0]["descricaoAnuncio"]; ?> autocomplete="off">
                    </div>

                    <div class="mb-3">
                        <label for="dataPublicacao" class="form-label">Data de publicação</label>
                        <input type="date" class="form-control" name="dataPublicacao" id="dataPublicacao" required <?php echo $advertInfoFetch[0]["dataPublicacao"]; ?> autocomplete="off">
                    </div>

                    <div class="mb-3">
                        <label for="marcaVeiculo" class="form-label">Marca do veículo</label>
                        <input type="text" class="form-control" name="marcaVeiculo" id="marcaVeiculo" required <?php echo $advertInfoFetch[0]["marcaVeiculo"]; ?> autocomplete="off">
                    </div>

                    <div class="mb-3">
                        <label for="modeloVeiculo" class="form-label">Modelo do veículo</label>
                        <input type="text" class="form-control" name="modeloVeiculo" id="modeloVeiculo" required <?php echo $advertInfoFetch[0]["modeloVeiculo"]; ?> autocomplete="off">
                    </div>

                    <div class="mb-3">
                        <label for="anoVeiculo" class="form-label">Ano do veículo</label>
                        <input type="number" class="form-control" name="anoVeiculo" id="anoVeiculo" required <?php echo $advertInfoFetch[0]["anoVeiculo"]; ?> autocomplete="off">
                    </div>

                    <div class="mb-3">
                        <label for="corVeiculo" class="form-label">Cor do veículo</label>
                        <input type="text" class="form-control" name="corVeiculo" id="corVeiculo" required <?php echo $advertInfoFetch[0]["corVeiculo"]; ?> autocomplete="off">
                    </div>

                    <div class="mb-3">
                        <label for="placaVeiculo" class="form-label">Placa do veículo</label>
                        <input type="text" class="form-control" name="placaVeiculo" id="placaVeiculo" required <?php echo $advertInfoFetch[0]["placaVeiculo"]; ?> autocomplete="off">
                    </div>

                    <div class="mb-3">
                        <label for="nomeProprietario" class="form-label">Nome do proprietário</label>
                        <input type="text" class="form-control" name="nomeProprietario" id="nomeProprietario" <?php echo $advertInfoFetch[0]["nomeProprietario"]; ?> required autocomplete="off">
                    </div>

                    <div class="mb-3">
                        <label for="telefoneProprietario" class="form-label">Telefone do proprietário</label>
                        <input type="number" class="form-control" name="telefoneProprietario" id="telefoneProprietario" <?php echo $advertInfoFetch[0]["telefoneProprietario"]; ?> required autocomplete="off">
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-confirm-color btn-lg">Editar</button>
                    </div>
                </form>
            </div>
        </div>
    </fieldset>
</div>