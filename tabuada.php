<?php
    include_once "php/erro.php";

    $resultados = (string)null;

    if(isset($_POST["enviar"])){

        $contador = (int)$_POST["contador"];
        $tabuada = (int)$_POST["tabuada"];

        if($tabuada == 0)
            echoErro(ERRO_ZERO);
        else if($contador > 0){
            for($i = 1; $i <= $contador; $i++){
                $resultados = $resultados . $tabuada . " x " . $i . " = " .
                ($tabuada * $i) . "<br>";
            }

        }

    }
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="style/style.css" type="text/css" rel="stylesheet">
</head>
<body>
    <header>
        Tabuada
    </header>
    <main>
        <form method="post" action="" name="">
            <div class="container">
                <label for="">Tabuada</label>
                <input type="text" name="tabuada">
                <label for="">Contador</label>
                <input type="text" name="contador">
            </div>
            <div class="resultado">
                <?=$resultados?>
            </div>
            <div class="enviar">
                <input name="enviar" type="submit">
            </div>
        </form>
    </main>
    <footer>

    </footer>
</body>
</html>
