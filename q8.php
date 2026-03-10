<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q1</title>
</head>
<body>
    <form method="get">
        <input type="number" name="numero1" placeholder="Real">
        <br>
        <input type="number" name="cotacao_dolar" placeholder="Cotação do dólar">
        <br>
        <button type="submit" name="enviador">Enviar</button>
    </form>

    <?php 
        if(isset($_GET['enviador'])) {
            $numero = $_GET['numero1'];
            $cotacaoDolar = $_GET['cotacao_dolar'];
            echo "Valor em reais é: " $numero / $cotacaoDolar;
        }
    ?>
</body>
</html>