<?php
    // Barra, barra para comentar código
    # Jogo velha também servi para comentar 
    /* 

        Para comentar bloco
    
    */
?>
 

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="/icones/Icone_001.ico">
    <title>Aula PHP</title>
</head>
<body>

    <?php $Ativado = "não"; ?>
    <?php if ($Ativado == "sim"){ ?>
        <h1> Está Ativado </h1>
    <?php }else{ ?>
        <h1> Não está Ativado </h1>
    <?php } ?>

</body>
</html>