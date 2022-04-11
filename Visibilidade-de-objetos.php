<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - Visibilidade de Objetos</title>
    <link rel="stylesheet" href="./css/style.css" />
</head>
<body>
    <div>
    <pre>
        <?php
            require_once './classes/Caneta.php';
            $c1 = new Caneta;
            $c1->modelo = "Bic cristal";
            $c1->cor = "Azul";
            //$c1->ponta = 0.5;   //private - acesso negado
            //$c1->carga = 90;      //protected - acesso negado

            $c1->rabiscar();
            $c1->tampar();
            print_r($c1);

         ?>
     </pre>
    </div> 
</body>
</html>