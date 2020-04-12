<div class="titulo">Operador Ternário</div>

<?php
$idade = 10;
$status;

if($idade >= 18){
    $status = "Maior de Idade";
}else {
    $status = "Menor de Idade";
}

echo "$status<br>";

$idade = 20;
$status = $idade >= 18 ? "Maior de idade" : "Menor de idade";

echo "$status<br>";

$idade = 70;
$status = $idade >= 18 ? $idade >= 65 ? "Aposentado" : "Maior de idade" : "Menor de idade"; 
//Não é usual termos uma operação dentro da outra, é melhor armazenar em uma variável.

echo "$status<br>";