<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado</h1>
        <?php 
            $nome = $_POST["nome"];
            $idade = $_POST["idade"];
            echo "<p>o seu nome é $nome e sua idade é $idade</p>";
            if($idade >= 18){
                echo "<p>e você pode votar</p>";
            }else{
                echo "<p>e você não pode votar</p>";
            }
        ?>
    </main>
</body>
</html>