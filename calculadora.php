<?php
    include_once "php/erro.php";

    $numero1 = null;
    $numero2 = null;
    $operador = (string)"";
    $resultado = (double)null;

    if(isset($_POST["enviar"])){

        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];

        if(isset($_POST["operador"]))
            $operador = $_POST["operador"];
        else{
            echoErro(ERRO_VAZIO);
        }

        if(is_numeric($numero1) && is_numeric($numero2)){
            switch($operador){
                case "+":
                    $resultado = $numero1 + $numero2;
                    break;
                case '-':
                    $resultado = $numero1 - $numero2;
                    break;
                case '*':
                    $resultado = $numero1 * $numero2;
                    break;
                case '/':
                    if($numero2 != 0)
                        $resultado = $numero1 / $numero2;
                    else
                        echoErro(ERRO_DIVISAO);

                    break;
                default:
                    echoErro(ERRO_VAZIO);
            }
        }
        else{
            echoErro(ERRO_VAZIO);
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
        Calculadora
    </header>
    <main>
        <form method="post" action="" name="">
            <div class="container">
                <div class="text">
                    <label>Número 1</label>
                    <input type="text" name="numero1" value="<?=$numero1?>">
                </div>
                <div class="text">
                    <label>Número 2</label>
                    <input type="text" name="numero2" value="<?=$numero2?>">
                </div>
            </div>

            <div class="container">
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
