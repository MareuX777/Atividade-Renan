<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q14</title>
</head>
<body>
    <form method="get">
        <input type="number" name="valor1">
        <br>
        <input type="number" name="valor2">
        <br>
        <button type="submit" name="enviador">Enviar</button>
    </form>

    <?php 
        if(isset($_GET['enviador'])) {
            $a = $_GET['valor1'];
            $b = $_GET['valor2'];
            if($a > $b) {
                echo "O maior é: $a";
            } else {
                echo "O maior é: $b";
            }
        }
    ?>
</body>
</html>
