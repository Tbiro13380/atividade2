<?php

    $HOST = "localhost:3307";
    $USER = "root";
    $SENHA = "root";
    $BANCO = "padaria";


    $db = new mysqli($HOST, $USER, $SENHA, $BANCO);

    $db->query("insert into clientes
    (`nome`,`telefone`,`ddd`)
    values ('".$_POST['nome']."','".$_POST['telefone']."','".$_POST['ddd']."')");

?>

Cliente adicionado

<a href="/mysql.php">Voltar</a>