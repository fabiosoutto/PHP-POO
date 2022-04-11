<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - Classes e Objetos</title>
    <link rel="stylesheet" href="./css/style.css" />
</head>
<body>
    <div>
    <pre>
        <?php
            require_once './classes/Caneta.php';
            $c1 = new Caneta;
            $c1->cor = "Azul";
            $c1->ponta = 0.5;
            $c1->tampada = false;

            $c1->tampar();

            $c1->rabiscar();
            print_r($c1);

            echo "<hr/>";
            #novo objeto
            $c2 = new Caneta;
            $c2->modelo = "Bic";
            $c2->cor = "verde";
            $c2->ponta= 0.5;
            $c2->carga = 50;
            $c2->tampar();
            print_r($c2);


         ?>
     </pre>
    </div> 
</body>
</html>