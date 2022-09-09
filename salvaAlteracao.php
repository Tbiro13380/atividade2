<?php

    $HOST = "localhost:3307";
    $USER = "root";
    $SENHA = "root";
    $BANCO = "padaria";

    $db = new mysqli($HOST, $USER, $SENHA, $BANCO);

    $db->query("update padaria.clientes set telefone = '".$_POST['telefone']."', nome = '".$_POST['nome']."', ddd = '".$_POST['ddd']."' where id = " . $_POST['cliente_id']);

?>

Cliente alterado com sucesso

<a href="/mysql.php">Voltar</a>