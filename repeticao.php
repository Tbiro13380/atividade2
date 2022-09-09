<?php

    $diasDaSemana[] = 'Joao';
    $diasDaSemana[] = 'Maria';
    $diasDaSemana[] = 'Pedro';


    //for ($i=0; $i <= 6; $i++) { 
    //    $listaDias .= '<td>'.$diasDaSemana[$i].'</td>';
    //}

    foreach ($diasDaSemana as $key => $value) {
        $listaDias .= '<td>'.$value.'</td>';
    }

    for ($i=0; $i <= 24 ; $i++) { 
        $horarios .= '<tr>
            <td>'.$i.'</td>
            <td>'.$i.'</td>
            <td>'.$i.'</td>
            <td>'.$i.'</td>
            <td>'.$i.'</td>
            <td>'.$i.'</td>
            <td>'.$i.'</td>
        </tr>';
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
    <table border='1'>
        <tr>
            <?php echo $listaDias; ?>
        </tr>
        <?php echo $horarios; ?>
    </table>
</body>
</html>