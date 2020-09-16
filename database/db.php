<?php 

session_start();

//dados da conexão 
$localhost = "localhost";
$user = "root";
$passw = "****"; //senha do db
$banco = "autovendas";

//chamo a variável global
global $pdo;

//faço de fato a conexão com db
try {
	$pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost, $user, $passw);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}

