<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo POO</title>
</head>
<body>
    <?php 
        require_once "Caneta.php";

        $c1 = new Caneta();
        $c1->cor = "Azul";
        $c1->modelo = "BIC Cristal";
        $c1->ponta = 0.5;
        $c1->carga = 90;
        $c1->tampada = true;
        $c1->destampar();

        $c1->rabiscar();
        $c1->mostrarEstado();
    ?>
</body>
</html>