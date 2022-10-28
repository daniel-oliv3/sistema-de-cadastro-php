<?php

/*Conexão com o banco de dados*/

$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "sistema-de-cadastro-db";

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);


















/* //teste de conexão
if($conexao->connect_errno){
    echo "Erro ao conectar com o bando de dados!";
}else {
    echo "conexão realizada com sucesso!";
}
*/

/*
- http://localhost/sistema-de-cadastro-php/config.php
- http://localhost/sistema-de-cadastro-php/formulario.php
*/


?>