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
        <h1>Analisador de número real</h1>
        <?php 
            //obtendo o número digitado pelo usuário
            $num = $_POST["n"] ?? 0;
            
            // obtendo o valor inteiro e fracionado
            $inteiro = (int) $num;
            $fracionado = $num - $inteiro;

            // formatando valores
            $inteiro_formatado = number_format($inteiro,0,",",".");
            $fracionado_formatado = number_format($fracionado,3,",",".");

            // mostrando resultado
            echo "<p>analisando o número <strong>" . number_format($num,2,",",".") . "</strong> informado pelo usuário:</p>";
            echo <<< RESULTADO
                <ul>
                    <li>A parte inteira do número é <strong>$inteiro_formatado</strong></li>
                    <li>A parte fracionada do número é <strong>$fracionado_formatado</strong></li>
                </ul>
            RESULTADO;
        ?>
         <p><a href="javascript:history.go(-1)">voltar para a página anterior</a></p>
    </main>
</body>
</html>