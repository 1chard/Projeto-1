<?php
    include_once "php/erro.php";
    include_once "php/funcaoMedia.php";

    $resultado = null;
$nota1 = null;
$nota2 = null;
$nota3 = null;
$nota4 = null;

if(isset($_POST["enviar"])){
    $nota1 = $_POST["numero1"];
    $nota2 = $_POST["numero2"];
    $nota3 = $_POST["numero3"];
    $nota4 = $_POST["numero4"];

    $resultado = calcularMedia($nota1, $nota2, $nota3, $nota4);
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
                <div class="text">
                <label for="">Número 1</label>
                <input type="text" name="numero1" value="<?=$nota1?>">
                </div>
                <div class="text">
                <label for="">Número 2</label>
                <input type="text" name="numero2" value="<?=$nota2?>">
                </div>
                <div class="text">
                <label for="">Número 3</label>
                <input type="text" name="numero3" value="<?=$nota3?>">
                </div>
                <div class="text">
                <label for="">Número 4</label>
                <input type="text" name="numero4" value="<?=$nota4?>">
                </div>
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
