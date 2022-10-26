<?php include("cabecalho.php");
include("conecta.php");
include("banco-pedido.php");

$id = $_GET['id'];
removePedido($conexao, $id);
header("location: pedido-lista.php?removido=true");
die();
