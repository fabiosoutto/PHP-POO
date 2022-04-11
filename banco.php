<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - BANCO FSOUTTO</title>
    <link rel="stylesheet" href="./css/style2.css" />
</head>
<body>
    <div>
    <pre>
        <?php
            require_once './classes/contaBanco.php';
            $p1 = new ContaBanco();  //João
            $p2 = new ContaBanco();  //Maria

            //abrindo as contas
            $p1->abrirConta("CC");
            $p1->setNumConta(111);
            $p1->setDono("João");

            $p2->abrirConta("CP");
            $p2->setNumConta(222);
            $p2->setDono("Maria");

            //depositando dinheiro
            $p1->depositar(300);
            $p2->depositar(500);

            //fazendo compras/saques
            $p2->sacar(100);

            //pagando a manutenção de conta
            $p1->pagarManut();
            $p2->pagarManut();

            //tentando saque indevido
            $p2->sacar(700);

            //encerrando as contas, vai dar erro
            $p1->fecharConta();
            $p2->fecharConta();

            //limpando as contas para encerrar
            $p1->sacar(338);
            $p2->sacar(530);

            //encerrando as contas
            $p1->fecharConta();
            $p2->fecharConta();

            print_r($p1);
            print_r($p2);

        ?>
    </pre>
    </div>
</body>
</html>