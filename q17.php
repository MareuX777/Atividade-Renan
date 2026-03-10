<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Questão 17</title>
</head>
<body>

<form method="post">

<?php 
for($i = 1; $i <= 80; $i++) {
    echo "Numero $i: ";
    echo "<input type='number' name='numero[]'><br>";
}
?>

<br>
<button type="submit">Enviar</button>

</form>

<?php

if(isset($_POST['numero'])) {

    $contador = 0;

    foreach($_POST['numero'] as $numero) {

        if($numero >= 10 && $numero <= 150) {
            $contador++;
        }

    }

    echo "Quantidade entre 10 e 150: $contador";
}

?>

</body>
</html>