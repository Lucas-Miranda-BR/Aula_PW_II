<?php
    include '../../config/connection.php';
    include 'userHeader.php';
    include 'userFooter.php';

    $stmt = $pdo->query('SELECT * FROM advertinfo');
    $advertList = $stmt->fetchAll();

    if (isset($_GET['advertId'])) {
        $advertId = $_GET['advertId'];
        echo "<div class='main-text-color'>O anuncio com o ID de: $advertId foi removido.</div>";
    }
?>

<div class="container mt-4">
    <?php foreach ($advertList as $index => $advert) { ?>
        <div class="card mb-4 shadow-sm">
            <div class="card-header main-bg-color main-text-color text-center">
                <h3><?php echo $advert['tituloAnuncio']; ?></h3>
            </div>

            <div class="card-body">
                <div class="row mb-3 text-center">
                    <div class="col-md-6">
                        <p class="mb-1"><strong>Proprietário:</strong> <?php echo $advert['nomeProprietario']; ?></p>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-1"><strong>Telefone:</strong> <?php echo $advert['telefoneProprietario']; ?></p>
                    </div>
                </div>
                <div class="bg-light p-3 mb-3 rounded text-center">
                    <p><?php echo $advert['descricaoAnuncio']; ?></p>
                    <p class="text-muted"><small>Publicado em: <?php echo $advert['dataPublicacao']; ?></small></p>
                </div>
                <div class="row text-center">
                    <div class="col-md-3 mb-2">
                        <p class="mb-1"><strong>Marca:</strong> <?php echo $advert['marcaVeiculo']; ?></p>
                    </div>
                    <div class="col-md-3 mb-2">
                        <p class="mb-1"><strong>Modelo:</strong> <?php echo $advert['modeloVeiculo']; ?></p>
                    </div>
                    <div class="col-md-2 mb-2">
                        <p class="mb-1"><strong>Ano:</strong> <?php echo $advert['anoVeiculo']; ?></p>
                    </div>
                    <div class="col-md-2 mb-2">
                        <p class="mb-1"><strong>Cor:</strong> <?php echo $advert['corVeiculo']; ?></p>
                    </div>
                    <div class="col-md-2 mb-2">
                        <p class="mb-1"><strong>Placa:</strong> <?php echo $advert['placaVeiculo']; ?></p>
                    </div>
                </div>
            </div>
            
            <div class="card-footer text-center">
                <a href="http://localhost/pw_ii/PHP/BD%20interactions/Exercise/public/user/update.php?advertId=<?php echo $advert['advertId']; ?>" class="btn btn-confirm-color">Editar</a>
                <a href="http://localhost/pw_ii/PHP/BD%20interactions/Exercise/public/user/delete.php?advertId=<?php echo $advert['advertId']; ?>" class="btn btn-confirm-color">Deletar</a>
            </div>
        </div>
    <?php } ?>
</div>