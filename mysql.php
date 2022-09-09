<?php

    $HOST = "localhost:3307";
    $USER = "root";
    $SENHA = "root";
    $BANCO = "padaria";


    $db = new mysqli($HOST, $USER, $SENHA, $BANCO);

    $resultado = $db->query("select * from clientes");

    while($cliente = $resultado->fetch_assoc()) {
        $listaClientes .=  "<tr>
            <td>".$cliente['id']."</td>
            <td>".$cliente['nome']."</td>
            <td>".$cliente['telefone']."</td>
            <td><a href='/editar.php?cliente_id=".$cliente['id']."'>Editar</a></td>
            <td><a href='/excluir.php?cliente_id=".$cliente['id']."'>Excluir</a></td>
        </tr>";
    }

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
    <h4><a href="inicial.php">Adicionar cliente</a></h4>
    <table border="1">
        <tr>
            <td>Codigo</td>
            <td>Nome</td>
            <td>Telefone</td>
            <td></td>
            <td></td>
        </tr>
        <?php echo $listaClientes; ?>
    </table>
</body>

</html>