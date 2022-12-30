<?php

$tamanho = readline('Digite o tamanho da senha(entre 6 e 60):');

if($tamanho < 6 || $tamanho > 30){
    die("Tamanho inválido\n");
}