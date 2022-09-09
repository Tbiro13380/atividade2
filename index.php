<?php

    $cidades[] = 'São Paulo';
    $cidades[] = 'Maringá';
    $cidades[] = 'Rio de Janeiro';
    $cidades[] = 'Curitiba';

    //var_dump($cidades);

    $cliente['nome'] = 'Guilherme';
    $cliente['genero'] = 'masculino';
    $cliente['celular'] = '44991697307';
    $cliente['email'] = 'guilherme@gmail.com';
    $clientes[] = $cliente;

    $cliente['nome'] = 'Eduardo';
    $cliente['genero'] = 'masculino';
    $cliente['celular'] = '4411111111';
    $cliente['email'] = 'eduardo@gmail.com';
    $clientes[] = $cliente;

    $cliente['nome'] = 'Maria';
    $cliente['genero'] = 'feminino';
    $cliente['celular'] = '442222222';
    $cliente['email'] = 'maria@gmail.com';
    $clientes[] = $cliente;

    //var_dump($clientes);

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
    <h1>Lista de Clientes</h1>
    <table width="100">
        <thead>
            <tr>
                <td>Nome</td>
                <td>Email</td>
                <td>Celular</td>
                <td>Genero</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> <?php echo $clientes[0]['nome']; ?> </td>
                <td> <?php echo $clientes[0]['email']; ?> </td>
                <td> <?php echo $clientes[0]['celular']; ?> </td>
                <td> <?php echo $clientes[0]['genero']; ?> </td>
            </tr>
            <tr>
                <td> <?php echo $clientes[1]['nome']; ?> </td>
                <td> <?php echo $clientes[1]['email']; ?> </td>
                <td> <?php echo $clientes[1]['celular']; ?> </td> 
                <td> <?php echo $clientes[1]['genero']; ?> </td>
            </tr>
            <tr>
                
                <td> <?php echo $clientes[2]['nome']; ?> </td>
                <td> <?php echo $clientes[2]['email']; ?> </td>
                <td> <?php echo $clientes[2]['celular']; ?> </td>
                <td> <?php echo $clientes[2]['genero']; ?> </td>
            </tr>
            <tr>
                <td> <?php echo $clientes[3]['nome']; ?> </td>
                <td> <?php echo $clientes[3]['email']; ?> </td>
                <td> <?php echo $clientes[3]['celular']; ?> </td>
                <td> <?php echo $clientes[3]['genero']; ?> </td>
            </tr>
        </tbody>
    </table>
</body>
</html>