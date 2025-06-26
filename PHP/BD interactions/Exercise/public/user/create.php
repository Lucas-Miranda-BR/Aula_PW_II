<?php
include '../../config/connection.php';
include 'userHeader.php';
include 'userFooter.php';
?>

<div class="container mt-5 mb-5">
    <fieldset class="border p-4 rounded indie-flower-regular main-text-color main-bg-color">
        <h1 class="border-0 indie-flower-title text-center main-bg-color w-auto px-3">Criar anúncios</h1>

        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <form action="create.php" method="POST" class="container-bg-color p-4 rounded">
                    <div class="mb-3">
                        <label for="tituloAnuncio" class="form-label">Título do anúncio</label>
                        <input type="text" class="form-control" name="tituloAnuncio" id="tituloAnuncio" required autocomplete="off">
                    </div>

                    <div class="mb-3">
                        <label for="descricaoAnuncio" class="form-label">Descrição do anúncio</label>
                        <input type="text" class="form-control" name="descricaoAnuncio" id="descricaoAnuncio" required autocomplete="off">
                    </div>

                    <div class="mb-3">
                        <label for="dataPublicacao" class="form-label">Data de publicação</label>
                        <input type="date" class="form-control" name="dataPublicacao" id="dataPublicacao" required autocomplete="off">
                    </div>

                    <div class="mb-3">
                        <label for="marcaVeiculo" class="form-label">Marca do veículo</label>
                        <input type="text" class="form-control" name="marcaVeiculo" id="marcaVeiculo" required autocomplete="off">
                    </div>

                    <div class="mb-3">
                        <label for="modeloVeiculo" class="form-label">Modelo do veículo</label>
                        <input type="text" class="form-control" name="modeloVeiculo" id="modeloVeiculo" required autocomplete="off">
                    </div>

                    <div class="mb-3">
                        <label for="anoVeiculo" class="form-label">Ano do veículo</label>
                        <input type="number" class="form-control" name="anoVeiculo" id="anoVeiculo" required autocomplete="off">
                    </div>

                    <div class="mb-3">
                        <label for="corVeiculo" class="form-label">Cor do veículo</label>
                        <input type="text" class="form-control" name="corVeiculo" id="corVeiculo" required autocomplete="off">
                    </div>

                    <div class="mb-3">
                        <label for="placaVeiculo" class="form-label">Placa do veículo</label>
                        <input type="text" class="form-control" name="placaVeiculo" id="placaVeiculo" required autocomplete="off">
                    </div>

                    <div class="mb-3">
                        <label for="nomeProprietario" class="form-label">Nome do proprietário</label>
                        <input type="text" class="form-control" name="nomeProprietario" id="nomeProprietario" required autocomplete="off">
                    </div>

                    <div class="mb-3">
                        <label for="telefoneProprietario" class="form-label">Telefone do proprietário</label>
                        <input type="number" class="form-control" name="telefoneProprietario" id="telefoneProprietario" required autocomplete="off">
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-confirm-color btn-lg">Criar</button>
                    </div>
                </form>
            </div>
        </div>
    </fieldset>
</div>

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

    $stmt->execute();
?>
