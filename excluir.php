<?php

    $HOST = "localhost:3307";
    $USER = "root";
    $SENHA = "root";
    $BANCO = "padaria";


    $db = new mysqli($HOST, $USER, $SENHA, $BANCO);

    $db->query("delete from clientes where id = ".$_GET['cliente_id']);

?>

Cliente removido com sucesso

<a href="/mysql.php">Voltar</a>