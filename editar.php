<?php

    $HOST = "localhost:3307";
    $USER = "root";
    $SENHA = "root";
    $BANCO = "padaria";


    $db = new mysqli($HOST, $USER, $SENHA, $BANCO);

    $resultado = $db->query("select * from clientes where id = ".$_GET['cliente_id']);

    $cliente = $resultado->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/salvaAlteracao.php" method="post">
        <input type="text" value="<?php echo $cliente['nome']; ?>" name="nome" placeholder="Insira o nome" /> <br>
        <input type="text" value="<?php echo $cliente['telefone']; ?>" name="telefone" placeholder="Insira o telefone" /> <br>
        <input type="text" value="<?php echo $cliente['ddd']; ?>" name="ddd" placeholder="Insira o ddd" /> <br>
        <input type="hidden" name="cliente_id" value="<?php echo $cliente['id']; ?>" />


        <input type="submit" value="Alterar" />
    </form>
</body>
</html>