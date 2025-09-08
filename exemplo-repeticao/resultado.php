<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Exemplo de repetição</h1>
        <?php
            $inicio = $_POST["inicio"];
            $fim = $_POST["fim"];
            $passo = $_POST["passo"];
            if($passo <= 0){
                $passo = 1;
            }

            for ($i = $inicio; $i <= $fim; $i += $passo) {
               echo $i . " ";
            }
        ?>
    </main>
</body>
</html>