<?php
    
$pagina = (string)"";

//algoritmo q mostra pagina aleatoria na tela
$rand = rand(0, 3);

switch($rand){
    case 0:
        $pagina = "calculadora.php";
        break;
    case 1:
        $pagina = "media.php";
        break;
    case 2:
        $pagina = "parimpar.php";
        break;
    case 3:
        $pagina = "tabuada.php";
        break;
}
    
if(isset($_POST["page"])){
    $pagina = $_POST["page"];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="style/index.css">
    <meta charset="UTF-8">
    <title>Projeto #1</title>
</head>

<body>
    <header>
        <div class="hamburger">
            <span class="ham"></span>
            <span class="ham"></span>
            <span class="ham"></span>

            <div class="hamburger-content">
                <a href="calculadora.php">Calculadora</a>
                <a href="media.php">Média</a>
                <a href="parimpar.php">Pares e Ímpares</a>
                <a href="tabuada.php">Tabuada</a>

            </div>
        </div>
        <h2>
            PROJETO #1
        </h2>
    </header>
    <main>
        <form name="preview" action="" method="post">
            <p>Experimente aqui mesmo, ou use o cabeçalho da pagina para entrar num modo.</p>
            <select name="page" id="">
                <option selected disabled>Escolha um</option>
                <option value="calculadora.php">Calculadora</option>
                <option value="media.php">Média</option>
                <option value="parimpar.php">Pares e ímpares</option>
                <option value="tabuada.php">Tabuada</option>
            </select>

            <input type="submit" name="enviar">
        </form>
        <iframe src="<?=$pagina?>"></iframe>
    </main>
</body>

</html>
