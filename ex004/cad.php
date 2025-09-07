<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php
            $nome = $_GET["nome"] ?? "sem nome";
            $sobrenome =$_GET["sobrenome"] ?? "sem sobrenome";
            echo "<p>é um prazer te conhecer $nome $sobrenome</p>";
        ?>
        <p><a href="javascript:history.go(-1)">voltar para a página anterior</a></p>
    </main>
</body>
</html>