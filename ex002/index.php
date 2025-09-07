<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exemplo do PHP</h1>
    <?php 
        // configure por padrão a data no padrão America São Paulo
        date_default_timezone_set("America/Sao_Paulo");
        // obtendo a data do dia, mês e ano
        echo "<p>Hoje é dia ".date("d/M/Y")."<p>";
        // obtendo a hora atual
        echo "e a hora atual é " . date("G:i:s T");
    ?>
</body>
</html>