<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado final</h1>
        <?php 
            $num = $_POST["num"] ?? 0; 
            $antecessor = $num - 1;
            $sucessor = $num + 1;
            echo "<p>o antecessor de $num é $antecessor e o sucessor $sucessor </p>";
        ?>
    </main>
</body>
</html>