<?php 
session_start();
if(!isset($_SESSION['contato']) == true){

    unset($_SESSION['contato']);
}else{

$contato = $_SESSION['contato'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="keywords" content="palavras,separadas,por,virgula">
        <meta name="description" content="descrição do site">
        <meta name="author" content="enio oliveira">

        
        <?php 
                // Gabriel Guedes Flores 15/09
                //aqui é uma validação para saber em qual página o usuário está, para saber 
                // qual arquivo css deve ser carregado

            if(isset($_GET['page']) && $_GET['page'] == 'venda'){

                echo '<link href="css/style.css" rel="stylesheet" type="text/css">';
                echo '<link href="css/venda.css" rel="stylesheet" type="text/css">';

            }elseif(isset($_GET['page']) && $_GET['page'] == 'sobre'){

                echo '<link href="css/style.css" rel="stylesheet" type="text/css">';
                echo '<link href="css/sobre.css" rel="stylesheet" type="text/css">';

            }elseif(isset($_GET['page']) && $_GET['page'] == 'veiculo'){

                echo '<link href="css/style.css" rel="stylesheet" type="text/css">';
                echo '<link href="css/veiculo.css" rel="stylesheet" type="text/css">';
                echo '<link href="css/venda.css" rel="stylesheet" type="text/css">';
            
            }else{
        ?>
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <?php } ?>

        <title>Autovendas</title>
    </head>
<body>
    