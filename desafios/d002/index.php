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
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100</p>
        <?php 
            //rand() = 1951 - Linear Congretional Generator
            //mt_rand() = 1997 - Mersenne Twister
            // A partir do PHP 7.1, rand() é um simples apontamento para o mt_rand()
            //random_int() gera número criptograficamente seguros
            $valor = random_int(0,100);
            echo "<p>o valor gerado foi <strong>$valor</strong></p>";
        ?>
        <button onclick="window.location.reload()">Gerar Outro</button>
    </main>
</body>
</html>