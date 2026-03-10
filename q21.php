<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q21</title>
</head>
<body>
    <form method="post">
        <textarea name="dados" rows="10" cols="60" placeholder="nome,sexo,idade,saude (uma pessoa por linha)"></textarea>
        <br>
        <button type="submit">Enviar</button>
    </form>

    <?php 
        if(isset($_POST['dados'])) {
            $linhas = preg_split('/\r?\n/', trim($_POST['dados']));
            $aptos = 0;
            $naoAptos = 0;
            foreach($linhas as $linha) {
                $parts = array_map('trim', explode(',', $linha));
                if(count($parts) < 4) continue;
                [$nome, $sexo, $idade, $saude] = $parts;
                $sexoUp = strtoupper($sexo);
                $idade = intval($idade);
                $saudeUp = strtolower($saude);
                $apto = false;
                if($sexoUp === 'M' && $idade >= 18 && $idade <= 45 && $saudeUp === 'boa') {
                    $apto = true;
                }
                if($apto) {
                    $aptos++;
                    echo "$nome - Apto<br>";
                } else {
                    $naoAptos++;
                    echo "$nome - Não apto<br>";
                }
            }
            echo "<br>Total aptos: $aptos <br>Total não aptos: $naoAptos";
        }
    ?>
</body>
</html>
