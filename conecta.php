<?php

$nomeBanco = "nomeservidor";
$opcoesConexao = array(
    "Database" => "database",
    "Uid" => "usuario", "PWD" => "senha"
);
$conexao = sqlsrv_connect($nomeBanco, $opcoesConexao);
if ($conexao === false) {
    die(print_r(sqlsrv_errors(), true));
}
