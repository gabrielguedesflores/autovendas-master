<?php 

class CadastraContato{
 
    public function cadastrar($name, $phone, $date_bd, $email, $message){

        global $pdo;

        $c = $pdo->prepare("INSERT INTO contact (name, phone, date_bd, email, message) 
                            VALUES (:name, :phone, :date_bd, :email, :message)");

        $c->bindValue('name', $name);
        $c->bindValue('phone', $phone);
        $c->bindValue('date_bd', $date_bd);
        $c->bindValue('email', $email);
        $c->bindValue('message', $message);

        $c->execute();
        $_SESSION['contato'] = 'Enviado com sucesso!';
        return true;
    }
}

