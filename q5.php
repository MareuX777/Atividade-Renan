<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q5</title>
</head>
<body>
    <form method="post">
        <?php
        for($i=1;$i <= 3;$i++) {
            echo "<label>Numero: $i</label>";
            echo "<input type='number' name='numero[]' required>";
        }
         ?>
        <input type="text" name="nome" required>
        <button type='submit' name='submit'>Enviar</button>
    </form>

    <?php 
    include 'functions.php';
    if(isset($_POST['submit'])) {
        $nome = $_POST['nome'];
        $nts = $_POST['numero'];
        $numero = null;
        for($i=0;$i <= 3; $i++){
            $numero += $nts[$i];
        }

        echo dividir($numero,3), "||  Nome: $nome";
    }
    ?>
</body>
</html>