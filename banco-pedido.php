<?php
function listaPedidos($conexao)
{
    $query = "SELECT TOP 100 * FROM FormularioAlmoxarifado
        ORDER BY ID DESC
    ";
    $stmt = sqlsrv_query($conexao, $query);
    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    }
    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        echo
        "<tr>" .
            "<td>" . $row['DATAPEDIDO']->format('Y-m-d H:i:s') . "</td>" .
            "<td>" . $row['NOME'] . "</td>" .
            "<td>" . $row['CRACHA'] . "</td>" .
            "<td>" . $row['SETOR'] . "</td>" .
            "<td>" . $row['TIPOREQUISICAO'] . "</td>" .
            "<td>" . $row['DESCRICAOMATERIAL'] . "</td>" .
            "<td>" . $row['QUANTIDADESOLICITADA'] . "</td>" .
            "<td>" . $row['APROVADOR'] . "</td>" .
            '<td> 
                <form action="remove-pedido.php?id=' . $row['id'] . '" method="post">' .
            '<button class="btn btn-danger">Remover</button>' .
            '</form>' .
            '</td>' .
            "</tr>";
    }
}

function inserePedido($conexao, $nome, $cracha, $setor, $tipoRequisicao, $descricaoMaterial, $quantidadeSolicitada, $aprovador)
{
    $query = "insert into FormularioAlmoxarifado (NOME, CRACHA, SETOR, TIPOREQUISICAO, DESCRICAOMATERIAL, QUANTIDADESOLICITADA, 
    APROVADOR, DATAPEDIDO) values ('{$nome}', '{$cracha}', '{$setor}', '{$tipoRequisicao}', '{$descricaoMaterial}', {$quantidadeSolicitada}, '{$aprovador}', GetDate())";
    return sqlsrv_query($conexao, $query);
}

function removePedido($conexao, $id)
{
    $query = "delete from FormularioAlmoxarifado where id = {$id}";
    $stmt = sqlsrv_query($conexao, $query);
    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    }
    return sqlsrv_query($conexao, $query);
}
