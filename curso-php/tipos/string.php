<div class="titulo">Tipo String</div>

<?php
echo 'Eu sou uma string', '<br>';
var_dump("Eu também");
echo '<br>';

// Concatenação
echo "Nós também" . ' somos';
echo '<br>', "Também aceito", " vírgulas";
echo '<br>';

echo "'Teste' " . '"Teste" ' . '\'Teste\' ' . "\"Teste\" " . "\\";

print("<br>Também existe a função print");
print "<br>Também existe a função print";

// Algumas funções
echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letra maiúscula');
echo '<br>' . ucwords('todas as palavras a primeira letra maiúscula');
echo '<br>' . strlen('Quantas letras?'); // Tamanho da string
echo '<br>' . strlen('Eu também'); //conta caracteres especiais
echo '<br>' . mb_strlen('Eu também', 'utf-8'); //não conta caracteres especiais
echo '<br>' . substr('Só uma parte mesmo', 7, 6); // parte - o primeiro parametro indica onde começa a contar e o segundo quantos caracteres depois
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso por aquilo'); 
//procura a primeiro primeiro parametro e troca pelo segundo dentro da string no terceiro parametro
?>