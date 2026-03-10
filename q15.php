<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q15</title>
</head>
<body>
    <form method="get">
        <input type="number" step="any" name="numero">
        <br>
        <button type="submit" name="enviador">Enviar</button>
    </form>

    <?php 
        if(isset($_GET['enviador'])) {
            $numero = $_GET['numero'];
            if($numero >= 100 && $numero <= 200) {
                echo "Está entre 100 e 200";
            } else {
                echo "Não está entre 100 e 200";
            }
        }
    ?>
</body>
</html>
