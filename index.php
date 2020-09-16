<?php

//index carregando a estrutura em php e a estrutura html para a página rodar 
include 'estrutura.php';
include 'views/header.php';

//criando o get para saber a rota que o usuário deseja acessar 

if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 'home';
}

//validação para entender a página que o usuário deseja acessar e enviado
switch($page){
    case 'venda': include 'views/venda.php'; break;
    case 'sobre': include 'views/sobre.php'; break;
    case 'contato': include 'views/contato.php'; break;
    case 'veiculo': include 'views/veiculo.php'; break;
    case 'login': include 'views/login.php'; break;
    
    default: include 'views/home.php';
}

//incluindo o footer do html 
include 'views/footer.php';
