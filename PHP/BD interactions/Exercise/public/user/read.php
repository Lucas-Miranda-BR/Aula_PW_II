<?php
    include '../../config/connection.php';

    $stmt = $pdo->query('SELECT * FROM advertInfo');
    $advertList = $stmt->fetchAll();

    if (isset($_GET['advertId'])) {
        $advertId = $_GET['advertId'];
        echo "O anuncio com o ID de: $advertId foi removido.";
    }

?>

<?php foreach ($advertList as $index => $advert) { ?>

        <p>Título: <strong> <?php echo $advert['tituloAnuncio']; ?> </strong> Descrição: <strong> <?php echo $advert['descricaoAnuncio']; ?> </strong> Publicado em: <strong> <?php echo $advert['dataPublicacao']; ?> </strong> Marca do veículo: <strong> <?php echo $advert['marcaVeiculo']; ?> </strong> Modelo do veículo: <strong> <?php echo $advert['modeloVeiculo']; ?> </strong> Ano do veículo: <strong> <?php echo $advert['anoVeiculo'];  ?> Cor do veículo: <strong> <?php echo $advert['corVeiculo']; ?>  </strong> Placa do veículo: <strong> <?php echo $advert['placaVeiculo']; ?>  </strong> Nome do proprietario: <strong> <?php echo $advert['nomeProprietario']; ?>  </strong> Telefone do proprietario: <strong> <?php echo $advert['telefoneProprietario']; ?>  </strong> </p>
        <a href="http://localhost/pw_ii/PHP/BD%20interactions/Exercise/public/user/delete.php?id=<?php echo $advert['advertId']; ?>">Deletar</a>
        <a href="http://localhost/pw_ii/PHP/BD%20interactions/Exercise/public/user/update.php?id=<?php echo $advert['advertId']; ?>">Editar</a>
        <hr>

<?php } ?>