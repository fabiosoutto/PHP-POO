<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - Encapsulamento</title>
    <link rel="stylesheet" href="./css/style.css" />
</head>
<body>
    <div>
        <h3>projeto: Controle Remoto</h3>
    <pre>
        <?php
            require_once './classes/controleRemoto.php';
            $c = new ControleRemoto();
            $c->ligar();
            $c->maisVolume();
            $c->abrirMenu();
            

         ?>
         </pre>
        </div> 
    </body>
    </html>