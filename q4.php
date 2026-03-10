<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q3</title>
</head>
<body>
    <form method="get">
        <label>Nome</label>
        <input type="text" name="nome" required>
        <label>Salario</label>
        <input type="number" name="salario" required>
        <br>
        <label>Vendas</label>
        <input type="number" name="vendas_mes" required>
        <br>
        <button type="submit" name="submit">Enviar</button>
    </form>
    <?php
    include 'functions.php';
    if(isset($_GET['submit'])) {
        $nome = $_GET['nome'];
        $sal = $_GET['salario'];
        $vendas = $_GET['vendas_mes'];
        $soldo = $vendas * 0.15 + $sal;

        echo "Nome: $nome || Salario: $sal || Vendas no mês: $vendas || Saldo final: $soldo";
    }
     ?>
</body>
</html>