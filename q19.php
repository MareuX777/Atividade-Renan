<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q19</title>
</head>
<body>
    <form method="post">
        <?php for($i = 1; $i <= 56; $i++): ?>
            <input type="text" name="nome[]" placeholder="Nome <?php echo $i ?>">
            <select name="sexo[]">
                <option value="M">M</option>
                <option value="F">F</option>
            </select>
            <br>
        <?php endfor; ?>
        <button type="submit">Enviar</button>
    </form>

    <?php 
        if(isset($_POST['nome']) && isset($_POST['sexo'])) {
            $totalH = 0;
            $totalM = 0;
            foreach($_POST['nome'] as $index => $nome) {
                $sexo = strtoupper($_POST['sexo'][$index]);
                if($sexo === 'M') {
                    echo "$nome - Homem<br>";
                    $totalH++;
                } else {
                    echo "$nome - Mulher<br>";
                    $totalM++;
                }
            }
            echo "<br>Total de homens: $totalH<br>Total de mulheres: $totalM";
        }
    ?>
</body>
</html>
