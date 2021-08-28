<?php

    const ERRO_DIVISAO = "Divisão por zero";
    const ERRO_VAZIO = "Campo não preenchido";
    const ERRO_NAO_NUMERO = "Não é numero";
    const ERRO_TABUADA_ZERO = "Tabuada de zero";
    const ERRO_NEGATIVO = "Valor negativo";
    const ERRO_MAIOR = "Alvo maior que o objetivo";

    function echoErro($mensagemErro){
        echo "<div class='caixaerro'>" . $mensagemErro . "</div>";
    }
?>
