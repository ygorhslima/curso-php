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
            $cotacao = 5.17;
            $real = $_POST["dinheiro"];
            $dolar = $real / $cotacao;

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            echo "seus " . numfmt_format_currency($padrao,$real,"BRL") . " Equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
            /* versão simples
                echo "seus R\$" . number_format($real, 2, ",",".") . " equivalem a US\$" . number_format($dolar, 2, ",", ".");
            */
            
        ?>
    </main>
</body>
</html>