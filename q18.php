<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q18</title>
</head>
<body>
    <form method="post">
        <?php for($i = 1; $i <= 75; $i++): ?>
            <input type="number" name="idade[]" placeholder="Idade <?php echo $i ?>">
            <br>
        <?php endfor; ?>
        <button type="submit">Enviar</button>
    </form>

    <?php 
        if(isset($_POST['idade'])) {
            foreach($_POST['idade'] as $idade) {
                if($idade >= 18) {
                    echo "Maior de idade<br>";
                } else {
                    echo "Menor de idade<br>";
                }
            }
        }
    ?>
</body>
</html>
