<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q23</title>
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
            if($numero == 40) {
                echo "Número é igual a 40";
            } elseif($numero > 80) {
                echo "Número maior que 80";
            } elseif($numero < 25) {
                echo "Número menor que 25";
            }
        }
    ?>
</body>
</html>
