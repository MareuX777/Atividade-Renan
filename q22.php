<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q22</title>
</head>
<body>
    <form method="post">
        <textarea name="dados" rows="10" cols="60" placeholder="custo,venda (uma linha por produto)"></textarea>
        <br>
        <button type="submit">Enviar</button>
    </form>

    <?php 
        if(isset($_POST['dados'])) {
            $linhas = preg_split('/\r?\n/', trim($_POST['dados']));
            $somaCusto = 0;
            $somaVenda = 0;
            $cont = 0;
            foreach($linhas as $linha) {
                $parts = array_map('trim', explode(',', $linha));
                if(count($parts) < 2) continue;
                $custo = floatval($parts[0]);
                $venda = floatval($parts[1]);
                $cont++;
                $somaCusto += $custo;
                $somaVenda += $venda;
                if($venda > $custo) {
                    echo "Produto $cont: Lucro<br>";
                } elseif($venda < $custo) {
                    echo "Produto $cont: Prejuízo<br>";
                } else {
                    echo "Produto $cont: Empate<br>";
                }
            }
            if($cont > 0) {
                $mediaCusto = $somaCusto / $cont;
                $mediaVenda = $somaVenda / $cont;
                echo "<br>Média preço de custo: $mediaCusto<br>Média preço de venda: $mediaVenda";
            }
        }
    ?>
</body>
</html>
