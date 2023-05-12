<?php

// função para validação do CPF
//A função espera um CPF apenas no formato de string
function validaCPF($cpf) {
    
    if (strlen($cpf) != 11){
        return false;
    }
    
    $soma = 0;
    // Calcula 1º digito      
    for ($i = 0; $i < 9; $i++){         
        $soma += (($i+1) * $cpf[$i]);
    }

    (($soma % 11) == 10)? $d1 = 0: $d1 = $soma % 11;
    
    $soma = 0;
    // Calcula 2º digito
    for ($i = 9, $j = 0; $i > 0; $i--, $j++){
        $soma += ($i * $cpf[$j]);
    }
    
    ($soma % 11) == 10? $d2 = 0: $d2 = $soma % 11;
         
    //Verifica se os dígitos batem com o CPF
    return ($d1 == $cpf[9] && $d2 == $cpf[10])? true : false;
}
   
   
   
   
// Função para validar o CNPJ
function validaCNPJ($cnpj) {

if (strlen($cnpj) != 14)
    return false; 

$soma = 0;
// Calcula 1º digito  
for ($i = 0, $j = 5, $soma = 0; $i < 12; $i++){
    $soma += $cnpj[$i] * $j;
    $j = ($j == 2) ? 9 : $j - 1;
}

($soma % 11) < 2? $d1 = 0 : $d1 = 11- ($soma % 11);

$soma = 0;
// Calcula 2º digito  
for ($i = 0, $j = 6, $soma = 0; $i < 13; $i++){
    $soma += $cnpj[$i] * $j;
    $j = ($j == 2) ? 9 : $j - 1;
}
    
($soma % 11) < 2? $d2 = 0 : $d2 = 11- ($soma % 11);

//Verifica se os dígitos batem com o CNPJ
return ($cnpj[12] == $d1 && $cnpj[13] == $d2)? true: false;
    
} 