<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q16</title>
</head>
<body>
    <form method="get">
        <input type="text" name="nome" placeholder="Nome">
        <br>
        <input type="number" step="any" name="n1" placeholder="Nota 1">
        <br>
        <input type="number" step="any" name="n2" placeholder="Nota 2">
        <br>
        <input type="number" step="any" name="n3" placeholder="Nota 3">
        <br>
        <button type="submit" name="enviador">Enviar</button>
    </form>

    <?php 
        if(isset($_GET['enviador'])) {
            $nome = $_GET['nome'];
            $n1 = $_GET['n1'];
            $n2 = $_GET['n2'];
            $n3 = $_GET['n3'];
            $media = ($n1 + $n2 + $n3) / 3;
            $men = '';
            if($media >= 7) {
                $men = 'Aprovado';
            } elseif($media <= 5) {
                $men = 'Reprovado';
            } else {
                $men = 'Recuperação';
            }
            echo "Nome: $nome <br> Média: $media <br> Menção: $men";
        }
    ?>
</body>
</html>
