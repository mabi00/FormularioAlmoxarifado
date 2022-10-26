<?php
//$conexao = mysqli_conexaoect('192.168.0.8', 'acesso', '8Cewc69Y1EOHQUJ@', 'loja');

$nomeBanco = "nomeservidor";
$opcoesConexao = array(
    "Database" => "database",
    "Uid" => "usuario", "PWD" => "senha"
);
$conexao = sqlsrv_connect($nomeBanco, $opcoesConexao);
if ($conexao === false) {
    die(print_r(sqlsrv_errors(), true));
}
