<?php
    include_once "php/erro.php";
    include_once "php/funcaoCalculadora.php";

    $numero1 = null;
    $numero2 = null;
    $operador = (string)null;
    $resultado = (string)null;

    if(isset($_POST["enviar"])){

        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        $operador = (string)$_POST["operador"];

        $resultado = calculadora($numero1, $numero2, $operador);
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
        Calculadora
    </header>
    <main>
        <form method="post" action="" name="">
            <div class="container halfof left">
                <div class="text">
                    <label>Número 1</label>
                    <input type="text" name="numero1" value="<?=$numero1?>">
                </div>
                <div class="text">
                    <label>Número 2</label>
                    <input type="text" name="numero2" value="<?=$numero2?>">
                </div>
            </div>

            <div class="container halfof right">
                <div class="radio">
                    <label>Soma</label>
                    <input type="radio" name="operador" value="+" <?=($operador == '+')? "checked" : "" ?>>
                </div>
                <div class="radio">
                    <label>Subtracao</label>
                    <input type="radio" name="operador" value="-" <?=($operador == '-')? "checked" : "" ?>>
                </div>
                <div class="radio">
                    <label>Multiplicacao</label>
                    <input type="radio" name="operador" value="*" <?=($operador == '*')? "checked" : "" ?>>

                </div>
                <div class="radio">
                    <label>Divisao</label>
                    <input type="radio" name="operador" value="/" <?=($operador == '/')? "checked" : "" ?>>

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
        2021 - RICHARD
    </footer>
</body>

</html>
