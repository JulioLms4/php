<?php

    $mensagem = 'Olá Mundo';

    echo $mensagem;

    $primeiro_nome = 'Julio';
    $idade = 22;
    $masculino = true;
    $feminino = false;

    $resultado = $idade + 18 * 7;
    echo  $resultado;

    $num = 37.4;
    echo 'ponto flutuante:', $num, ' <br/>';

    $num2 = (int) $num;
    echo 'inteiro:', $num2;

    $nota = 8;

    if($nota >= 7){

        echo '<p> passou </p>';
    }else{
        echo '<p> reprovou </p>';
    }
?>