<?php
    $impares = (string)null;
    $pares = (string)null;

    if(isset($_POST["enviar"])){
        for($i = (int)$_POST["inicial"]; $i <= (int)$_POST["final"]; ++$i){
            if(($i % 2) == 1)
                $impares = $impares . $i . "<br>";
            else
                $pares = $pares . $i . "<br>";

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
        TABUADA
    </header>
    <main>
        <form method="post" action="" name="">
            <div class="container">
                <select name="inicial" id="">
                    <?php
                        for($i = 0; $i <= 500; ++$i)
                            echo "<option value='" . $i . "'>" . $i . "</option>";
                    ?>
            </select>
                <select name="final" id="">
                    <?php
                        for($i = 100; $i <= 1000; ++$i)
                            echo "<option value='" . $i . "'>" . $i . "</option>";
                    ?>
                </select>
            </div>
            <div class="resultado">
                <div class="container">
                    <h1>
                        PARES
                    </h1>
                    <p>
                        <?=$pares?>
                    </p>
                </div>
                <div class="container">
                    <h1>
                        IMPARES
                    </h1>
                    <p>
                        <?=$impares?>
                    </p>
                </div>
            </div>
            <div class="enviar">
                <input name="enviar" type="submit" >
            </div>
        </form>
    </main>
    <footer>

    </footer>
</body>
</html>
