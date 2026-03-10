<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q20</title>
</head>
<body>
    <form method="get">
        <input type="number" step="any" name="valor" placeholder="Valor do carro">
        <br>
        <input type="number" name="ano" placeholder="Ano do veículo">
        <br>
        <button type="submit" name="enviador">Enviar</button>
    </form>

    <?php 
        if(isset($_GET['enviador'])) {
            $valor = $_GET['valor'];
            $ano = $_GET['ano'];

            if($ano <= 2000) {
                $desconto = $valor * 0.12;
            } else {
                $desconto = $valor * 0.07;
            }

            $valorPago = $valor - $desconto;

            echo "Desconto: $desconto <br>Valor a pagar: $valorPago";
        }
    ?>
</body>
</html>
