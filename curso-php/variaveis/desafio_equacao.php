<div class="titulo">Desafio Equação</div>

<?php

$numerador1 = (6 * (3 + 2)) ** 2;
$numerador2 = (1 - 5) * (2 - 7);
$denominador1 = 3 * 2;
$denominador2 = 2;
$primeirafracao = $numerador1 / $denominador1;
$segundafracao = ($numerador2 / $denominador2) ** 2;
$resolucao = ($primeirafracao - $segundafracao) ** 3 / 10 ** 3;

echo "Primeiro Numerador: " . $numerador1;
echo '<br>';
echo "Segundo Numerador: " . $numerador2;
echo '<br>';
echo "Primeiro Denominador: " . $denominador1;
echo '<br>';
echo "Segundo Denominador: " .$denominador2;
echo '<br>';
echo "Primeira Fração: " . $primeirafracao;
echo '<br>';
echo "Segunda Fração: " . $segundafracao;
echo '<br>';
echo "Resolução: " . $resolucao;