<?php include("cabecalho.php");
include("conecta.php");
include("banco-pedido.php"); ?>

<?php
if (array_key_exists("removido", $_POST) && $_POST["removido"] == "true") {
?>
    <div class="alert alert-success" role="alert">
        <p>pedido removido com sucesso!</p>
    </div>
<?php
}
?>

<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th scope="col">Data de Solicitação</th>
            <th scope="col">Nome</th>
            <th scope="col">Crachá</th>
            <th scope="col">Setor</th>
            <th scope="col">Tipo Requisição</th>
            <th scope="col">Descrição Material</th>
            <th scope="col">Quantidade Solicitada</th>
            <th scope="col">Aprovador</th>
            
            <th scope="col">Remover</th>
        </tr>
    </thead>
    <?php $pedidos = listaPedidos($conexao); ?>
</table>
<?php include("rodape.php") ?>