<?php
    include_once "php/erro.php";

    $resultado = 0;
$nota1 = null;
$nota2 = null;
$nota3 = null;
$nota4 = null;

if(isset($_POST["enviar"])){
    $nota1 = $_POST["numero1"];
    $nota2 = $_POST["numero2"];
    $nota3 = $_POST["numero3"];
    $nota4 = $_POST["numero4"];


        if(is_numeric($nota1) && is_numeric($nota2) && is_numeric($nota3) && is_numeric($nota4))
            $resultado = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
        else
            echoErro(ERRO_NAO_NUMERO);
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
        Média
    </header>
    <main>
        <form method="post" action="" name="">
            <div class="container">
                <label for="">Número 1</label>
                <input type="text" name="numero1">
                <label for="">Número 2</label>
                <input type="text" name="numero2">
                <label for="">Número 3</label>
                <input type="text" name="numero3">
                <label for="">Número 4</label>
                <input type="text" name="numero4">
            </div>
            <div class="resultado">
                <?=$resultado?>
            </div>
            <div class="enviar">
                <input type="submit" name="enviar">
            </div>
        </form>
    </main>
    <footer>
        LOREM IPSUM
    </footer>
</body>
</html>
