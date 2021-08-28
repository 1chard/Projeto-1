<?php
    function calcularMedia($nota1, $nota2, $nota3, $nota4){
        $resultado = null;
        
        if(is_numeric($nota1) && is_numeric($nota2) && is_numeric($nota3) && is_numeric($nota4))
            $resultado = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
        else{
            if($nota1 == "" || $nota2 == "" || $nota3 == "" || $nota4 == "" )
                echoErro("Erro: " . ERRO_VAZIO);
            else
                echoErro("Erro: " . ERRO_NAO_NUMERO);
        }
        
        return $resultado;
    }
?>