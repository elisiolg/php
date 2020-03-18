<div class="titulo">Desafio String</div>

<?php
//Enunciado:
// Avaliando os métodos na documentação da string,
// qual o método que a posição do texto 'abc'
// na string !AbCaBcabc retorne 1?

echo strpos('!AbCaBcabc', 'abc') . '<br>';
echo stripos('!AbCaBcabc', 'abc') . '<br>';
?>