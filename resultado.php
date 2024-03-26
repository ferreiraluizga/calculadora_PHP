<?php

$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
$operacao = $_GET['operacao'];

if($operacao == 'soma'){
    $resultado = $numero1 + $numero2;
    echo "O resultado da soma é: $resultado";
}
else if($operacao == 'subtracao'){
    $resultado = $numero1 - $numero2;
    echo "O resultado da subtração é: $resultado";
}
else if($operacao == 'multiplicacao'){
    $resultado = $numero1 * $numero2;
    echo "O resultado da multiplicação é: $resultado";
}
else if($operacao == 'divisao'){
    $resultado = $numero1 / $numero2;
    echo "O resultado da divisão é: $resultado";
}
else{
    echo "Operação Inválida";
}

?>