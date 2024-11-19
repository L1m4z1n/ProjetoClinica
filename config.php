<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'clinica';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

//if ($conexao->connect_errno) {
  //     echo "ERRO";
//} else {
  //     echo "Conexão efetuada com sucesso";
//}
