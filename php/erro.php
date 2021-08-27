<?php

    const ERRO_DIVISAO = "Erro: Divisão por zero.";
    const ERRO_VAZIO = "Preencha todos os campos.";
const ERRO_NAO_NUMERO = "Erro: Não é numero.";
const ERRO_ZERO = "Erro: Tabuada de zero.";

    function echoErro($mensagemErro){
        echo "<div class='caixaerro'>" . $mensagemErro . "</div>";
    }
?>
