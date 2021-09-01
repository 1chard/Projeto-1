<?php
    include_once "php/erro.php";
    include_once "php/funcaoTabuada.php";

    $resultados = (string)null;
    $contador = (string)null;
    $tabuada = (string)null;

    if(isset($_POST["enviar"])){

        if($_POST["contador"] == "" || $_POST["tabuada"] == "")
            echoErro("Erro: " . ERRO_VAZIO);

        else if(!is_numeric($_POST["contador"]) || !is_numeric($_POST["tabuada"]))
            echoErro("Erro: " . ERRO_NAO_NUMERO);


        else{
        $contador = $_POST["contador"];
        $tabuada = $_POST["tabuada"];
        
        if($tabuada == null){
            echoErro("Erro: Nenhuma tabuada inserida.");
        }
        else if($contador == null){
            echoErro("Erro: Nenhuma contagem inserida.");
        }
        else{//nenhum camp ta vazio
            $resultados = tabuadaParaHTML((int)$tabuada, (int)$contador);
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
               <div class="text">
                <label for="">Tabuada</label>
                <input type="text" name="tabuada" value="<?=$tabuada?>">
                </div>
                <div class="text">
                <label for="">Contador</label>
                <input type="text" name="contador"  value="<?=$contador?>">
                </div>
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
        2021 - RICHARD
    </footer>
</body>
</html>
