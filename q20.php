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
        <select name="continuar">
            <option value="S">Sim</option>
            <option value="N">Não</option>
        </select>
        <br>
        <input type="hidden" name="total2000" value="<?php echo isset($_GET['total2000']) ? $_GET['total2000'] : 0 ?>">
        <input type="hidden" name="totalgeral" value="<?php echo isset($_GET['totalgeral']) ? $_GET['totalgeral'] : 0 ?>">
        <button type="submit" name="enviador">Enviar</button>
    </form>

    <?php 
        if(isset($_GET['enviador'])) {
            $valor = $_GET['valor'];
            $ano = $_GET['ano'];
            $continuar = strtoupper($_GET['continuar']);
            $total2000 = intval($_GET['total2000']);
            $totalgeral = intval($_GET['totalgeral']);

            if($ano <= 2000) {
                $desconto = $valor * 0.12;
                $total2000++;
            } else {
                $desconto = $valor * 0.07;
            }
            $totalgeral++;
            $valorPago = $valor - $desconto;

            echo "Desconto: $desconto <br> Valor a pagar: $valorPago <br>";
            echo "Total de carros até 2000: $total2000 <br> Total geral: $totalgeral <br>";

            if($continuar === 'N') {
                echo "Fim do cálculo.";
            }
        }
    ?>
</body>
</html>
