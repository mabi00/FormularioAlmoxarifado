<?php include("cabecalho.php");
include("conecta.php");
include("banco-pedido.php"); ?>

<?php

$nome = $_POST["nome"];
$cracha = $_POST["cracha"];
$setor = $_POST["setor"];
$tipoRequisicao = $_POST["tipoRequisicao"];
$descricaoMaterial = $_POST["descricaoMaterial"];
$quantidadeSolicitada = $_POST["quantidadeSolicitada"];
$aprovador = $_POST["aprovador"];

if (inserePedido($conexao, $nome, $cracha, $setor, $tipoRequisicao, $descricaoMaterial, $quantidadeSolicitada, $aprovador)) { ?>
    <div class="alert alert-success" role="alert">
        <p>Pedido de <?= $nome ?>, <?= $quantidadeSolicitada ?> Unidades solicitadas com sucesso!</p>
    </div>
    <a href="index.php" class="btn btn-success" role="button" aria-pressed="true">Voltar</a>
<?php
} else {
    $msg = sqlsrv_errors($conexao);
?>
    <div class="alert alert-danger" role="alert">
        <p>Pedido de <?= $descricaoMaterial ?> não foi adicionado: <?= $msg ?></p>
    </div>
<?php

};
?>
<?php include("rodape.php") ?>