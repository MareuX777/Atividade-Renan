<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q24</title>
</head>
<body>
    <form method="post">
        <textarea name="numeros" rows="6" cols="40" placeholder="Digite números separados por espaço, vírgula ou quebra de linha"></textarea>
        <br>
        <button type="submit">Enviar</button>
    </form>

    <?php 
        if(isset($_POST['numeros'])) {
            $texto = $_POST['numeros'];
            $partes = preg_split('/[\s,;]+/', $texto, -1, PREG_SPLIT_NO_EMPTY);
            foreach($partes as $p) {
                $v = floatval($p);
                if($v > 0) {
                    echo "$v - Positivo<br>";
                } elseif($v < 0) {
                    echo "$v - Negativo<br>";
                } else {
                    echo "$v - Zero<br>";
                }
            }
        }
    ?>
</body>
</html>
