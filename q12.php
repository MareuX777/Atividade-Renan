<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q12</title>
</head>
<body>
    <form method="get">
        <input type="number" step="any" name="custo">
        <br>
        <button type="submit" name="enviador">Enviar</button>
    </form>

    <?php 
        if(isset($_GET['enviador'])) {
            $custo = $_GET['custo'];
            $comImpostos = $custo + ($custo * 0.45);
            $consumidor = $comImpostos + ($comImpostos * 0.28);
            echo "Custo ao consumidor: $consumidor";
        }
    ?>
</body>
</html>
