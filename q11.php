<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q11</title>
</head>
<body>
    <form method="get">
        <input type="number" step="any" name="custo">
        <br>
        <input type="number" step="any" name="percentual">
        <br>
        <button type="submit" name="enviador">Enviar</button>
    </form>

    <?php 
        if(isset($_GET['enviador'])) {
            $custo = $_GET['custo'];
            $percentual = $_GET['percentual'];
            $venda = $custo + ($custo * $percentual / 100);
            echo "Valor de venda: $venda";
        }
    ?>
</body>
</html>
