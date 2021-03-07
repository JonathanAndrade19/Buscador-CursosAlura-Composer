<?php 

class TestandoClassMap 
{
    public static function classMap()
    {  
        $idade = 18;
        $niveldeAcesso = 1;

        if ($idade >= 18 || $niveldeAcesso > 1) {
            echo "Olá sejá Bem Vindo.";
        } else {
            echo "Olá Você não tem acesso.";
        }
    }
}