
<form action="controllers/p_contato.php" method="POST">
<div class="clear"></div> 
<section class="contato">
    <div class="container">
        <div class="line-titulo-contato">
            <div class="ln1-contato"></div>
                <h2>Contato</h2>
            <div class="ln2-contato"></div>
            <div class="clear"></div>
        </div>
        <div class="formulario-contato">
            <input type="text" name="name" placeholder="Nome" required/>
            <br><br>
            <input type="tel" name="phone" placeholder="telefone" required minlength="11" maxlength="11">
            <input type="date" name="date_bd" placeholder="Data de Nascimento" required minlength="11" maxlength="11">
            <br><br>
            <input type="email" name="email" placeholder="Email" required>
            <br><br>
            <textarea name="message" placeholder="digite sua mensagem"></textarea> 
            <br><br>
            <input type="submit" name="acao" value="Enviar">              
        </div>
            <?php if(isset($_SESSION['contato'])){
                echo "<style='text-align: center;'>".$contato."</style>"; 
                unset($_SESSION['contato']);
            }
            ?>
    </div>
</section>
</form>
