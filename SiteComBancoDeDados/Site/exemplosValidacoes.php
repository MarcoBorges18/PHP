<?php

// Validação de E-mail
$Email = "joao.paulo@ezitus.com.br";
echo filter_var($Email, FILTER_VALIDATE_EMAIL)? "Email Válido": "Email Iválido";

$CNPJ = " 000.111 .222-99 ";
echo "<br> $CNPJ <br>";
$padrao = array(".","/"," ", "-");
//Removendo caracteres especiais
$cpf2 = str_replace($padrao, "", $CNPJ);
var_dump($cpf2);


//Limpando caracteres em branco no início e no final da string
$RazaoSocial = trim($RazaoSocial);
echo $RazaoSocial."<br>";

var_dump($RazaoSocial);
$RazaoSocial =  str_replace("  ", " ", $RazaoSocial);
var_dump($RazaoSocial);




