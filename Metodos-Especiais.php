<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - Métodos Especiais</title>
    <link rel="stylesheet" href="./css/style.css" />
</head>
<body>
    <div>
    <pre>
        <?php
            require_once './classes/Caneta2.php';
            $c1 = new Caneta("Bic","Azul",0.7);
            $c2 = new Caneta("KKK","Vermelha",1.2);

            print_r($c1);
            print_r($c2);

         ?>
     </pre>
    </div> 
</body>
</html>