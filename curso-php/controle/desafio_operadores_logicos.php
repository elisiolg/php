<div class="titulo">Desafio Op. Lógicos</div>

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça)</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta)</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select{
        font-size: 1.8rem;
    }
</style>

<?php
if(isset($_POST['t1']) && isset($_POST['t2'])){
    $trab1 = !!$_POST['t1'];
    $trab2 = !!$_POST['t2'];
    
    echo "<br>";

    if($trab1 && $trab2)
        echo 'Compramos um TV de 50" e um sorvete';
    else if($trab1 || $trab2)
        echo 'Compramos um TV de 32" e um sorvete';
    else
        echo 'Não compramos a TV';
}
?>