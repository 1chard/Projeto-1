<?php
    include_once "php/erro.php";

    function tabuadaParaHTML(int $tabuada, int $contador){
        $retorno = (string)null;
        
        if($tabuada == 0)
            echoErro("Erro: " . ERRO_TABUADA_ZERO . ".");
           
        else if($contador >= 0){
            
            for($i = 1; $i <= $contador; $i++){
                $retorno = $retorno . $tabuada . " x " . $i . " = " .
                ($tabuada * $i) . "<br>";
            }

        }
        else{
            echoErro(ERRO_NEGATIVO . " no contador.");
        }
        
        return $retorno;
    }
?>


