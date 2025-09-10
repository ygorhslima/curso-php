<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
    <?php 
        require_once "ContaBanco.php";
        $dono = $_POST["dono"];
        $tipo = $_POST["tipo"];
        // conta de jubileu
        $conta1 = new ContaBanco();
        $conta1->abrirConta($tipo);
        $conta1->setDono($dono);
    ?>
    <main>
        <?php 
            $conta1->mostrarDados();
        ?>
    </main>
</body>
</html>