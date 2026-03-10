<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q3</title>
</head>
<body>
    <form method="get">
        <label>combustivel</label>
        <input type="number" name="combustivel" required>
        <label>Distância</label>
        <input type="number" name="distancia" required>
        <br>
        <button type="submit" name="submit">Enviar</button>
    </form>
    <?php
    include 'functions.php';
    if(isset($_GET['submit'])) {
        $dist = $_GET['distancia'];
        $combustivel = $_GET['combustivel'];

        echo "Consumo médio: ", dividir($numero,$numero2);
    }
     ?>
</body>
</html>