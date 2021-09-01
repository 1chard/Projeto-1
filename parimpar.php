<?php
    include_once "php/erro.php";
    include_once "php/funcaoParImpar.php";

    $impares = (string)null;
    $pares = (string)null;
    $imparesQ = (int)0;
    $paresQ = (int)0;

    if(isset($_POST["enviar"])){
        if(@$_POST["inicial"] == "" || @$_POST["final"] == ""){
            echoErro("Erro: Campo(s) não preenchidos");
        }
        else{
        
        $inicial = (int)$_POST["inicial"];
        $final = (int)$_POST["final"];
        
            
        if($inicial > $final)
            echoErro("Erro: " . ERRO_MAIOR . ", $inicial é maior que $final");
        else if($inicial == $final)
            echoErro("Erro: O valor inicial é o mesmo que o final ($inicial).");
        else{
            $pares = retornaPares($inicial, $final);
            $impares = retornaImpares($inicial, $final);
            $paresQ = (int)quantidadePares($inicial, $final);
            $imparesQ = (int)quantidadeImpares($inicial, $final);
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
        Impar ou Par
    </header>
    <main>
        <form method="post" action="" name="">
            <div class="container" >
                <select name="inicial">
                    <option selected disabled>Por favor, insira um número.</option>
                    <?php
                        drawOptions(0, 500);
                    ?>
            </select>
                <select name="final">
                    <option selected disabled>Por favor, insira outro número.</option>
                    <?php
                        drawOptions(100, 1000);
                    ?>
                </select>
            </div>
            <div class="resultado">
                <div class="resultado">
                    <h1>
                        PARES
                    </h1>
                    <p>
                        <?=$pares?>
                    </p>
                    <h3>
                        Quantidade: <?=$paresQ?>
                    </h3>
                </div>
                <div class="resultado">
                    <h1>
                        IMPARES
                    </h1>
                    <p>
                        <?=$impares?>
                    </p>
                    <h3>
                        Quantidade: <?=$imparesQ?>
                    </h3>
                </div>
            </div>
            <div class="enviar">
                <input name="enviar" type="submit">
            </div>
        </form>
    </main>
    <footer>
        2021 - RICHARD
    </footer>
</body>
</html>
