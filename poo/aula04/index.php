<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo POO</title>
    <style>
        .container{
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: lightblue;
            color: black;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            width: 500px;
            margin: 10px;

        }
    </style>
</head>
<body>
    <?php 
        require_once "Caneta.php";
        $c1 = new Caneta("BIC Cristal","Azul",0.6,90);
        $c2 = new Caneta("KKK",'Vermelho',1.0,70);
        
        /*
        $c1->setModelo("BIC Cristal");
        $c1->setCor("Azul");
        $c1->setPonta(0.6);
        $c1->setCarga(90);
        */
        $c1->mostrarEstado();
        $c2->mostrarEstado();
    ?>
</body>
</html>