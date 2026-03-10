<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q1</title>
</head>
<body>
    <form method="get">
        <input type="number" name="numero1" placeholder="°C">
        <br>
        <button type="submit" name="enviador">Enviar</button>
    </form>

    <?php 
        if(isset($_GET['enviador'])) {
            $numero = $_GET['numero1'];
            
            echo "Temperatura em °C é: " $numero * 1.8 + 32;
        }
    ?>
</body>
</html>