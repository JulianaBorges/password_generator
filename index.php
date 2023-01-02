<?php

$tamanho = readline('Digite o tamanho da senha(entre 6 e 60):');

if($tamanho < 6 || $tamanho > 60){
    die("Tamanho inválido\n\n");
}

//CARACTERES DA SENHA
$caracteres = [];

// MAIÚSCULAS
if(readline('Permitir letras maiúsculas? (s/n)') == 's'){
    $caracteres = array_merge($caracteres,range('A','Z'));
   }
// MINUSCULAS
if(readline('Permitir letras minusculas? (s/n)') == "s"){
    $caracteres = array_merge($caracteres,range('a','z'));
}
//SIMBOLOS
if(readline('Permitir simbolos? (s/n)') == "s"){
    $caracteres = array_merge($caracteres,range( "#", "&"));
}
//NUMÉRICOS
if(readline('Permitir caracteres numéricos? (s/n)') == "s"){
    $caracteres = array_merge($caracteres,range(0,9));
}

if(empty($caracteres)){
    die("Nenhum caractere selecionado");
}
   echo"<pre>";
   print_r($caracteres);
   echo "</pre>"; exit;

