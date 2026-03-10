<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q1</title>
</head>
<body>
    <form method="get">
        <input type="number" name="numero1">
        <br>
        <input type="number" name="numero2">
        <br>
        <button type="submit" name="enviador">Enviar</button>
    </form>

    <?php 
        if(isset($_GET['enviador'])) {
            $numero = $_GET['numero1'];
            $numero2 = $_GET['numero2'];
            $fixer = $numero;
            $numero = $numero2;
            $numero2 = $fixer;
            echo "Numero 1 = $numero || Numero 2 = $numero2";
        }

        

    ?>
</body>
</html>