<?php

ob_start();

//validação para saber sobre o formulário de contato
//se o campo existe e se ele é diferente de vazio

if(isset($_POST['name']) && !empty($_POST['name']) && 
   isset($_POST['phone']) && !empty($_POST['phone']) && 
   isset($_POST['email']) && !empty($_POST['email'])){

    //chamo a conexão com o db
    require '../database/db.php';
    require '../class/CadastraContato.class.php';

    //instancio  a classe de CadastraContato.class.php
    $contact = new CadastraContato();
    
    //recebo os posts da view e atribuo em váriaveis 
    $name = $_POST['name'];
    $phone = $_POST['phone']; 
    $date_bd = $_POST['date_bd']; 
    $email = $_POST['email'];
    $message = $_POST['message'];

    //chamo a página de configuração de envio de e-mail
    require 'sendEmail.php';

    //instancio  a classe de sendEmail.php
    $e = new sendEmail();

    //chamo a função que envia o e-mail da classe de sendEmail.php
    //valido se função de enviar e-mail e a função de cadastrar no db retornou true
    if($e->enviaEmail($name, $phone, $date_bd, $email, $message) == true && $contact-> cadastrar($name, $phone, $date_bd, $email, $message) == true){
        
        header('Location: ../index.php');
        
    }else{

        header('Location: ../index.php');

    }
    
}else{

    header('Location: ../index.php');

}



