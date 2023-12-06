<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas 1.0</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de moeda</h1>
        <?php 
        $moeda=$_REQUEST['valor'];
        $dollar="4.93";
        $conv=$moeda / $dollar;
        echo"O valor a ser convertido foi de R$".number_format($moeda,2);
        echo"<br>O valor em Dolar é US$ ".number_format($conv,2);
        echo" <br>O valor do Dolar é fixo em<strong> 4.93 </strong>diretamente no codigo <br> ";
        ?>
        <button onclick="javascript:history.go(-1)">&#x1F519 Voltar</button>
    </main>
</body>
</html>