<?php 
    function calculadora($numero1, $numero2, string $operador){
        
    $resultado = (string)"";
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
                        echoErro("Erro: " . ERRO_DIVISAO);

                    break;
                default:
                    echoErro(ERRO_VAZIO . " - Operação, escolha acima.");
            }
        }
    else{
        if($numero1 == "" || $numero2 == "")
            echoErro("Erro: " . ERRO_VAZIO);
        else
            echoErro("Erro: " . ERRO_NAO_NUMERO);
    }
        
        
    return $resultado;
    }
?>