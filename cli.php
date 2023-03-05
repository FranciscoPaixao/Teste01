<?php
echo "Digite as medidas do triângulo: \n";
$lado1 = readline("Lado 1: ");
$lado2 = readline("Lado 2: ");
$lado3 = readline("Lado 3: ");
if(!is_numeric($lado1) || !is_numeric($lado2) || !is_numeric($lado3) || $lado1 <= 0 || $lado2 <= 0 || $lado3 <= 0){
    echo "Medidas inválidas! \n";
    exit;
}
echo "Verificando se é um triângulo... \n";
if($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1){
    echo "É um triângulo! \n";
} else {
    echo "Não é um triângulo! \n";
    exit;
}
echo "Tipo do triângulo: ";
if($lado1 == $lado2 && $lado2 == $lado3){
    echo "Triângulo equilátero\n";
} else if($lado1 != $lado2 || $lado2 != $lado3 || $lado1 != $lado3){
    echo "Triângulo escaleno\n";
} else {
    echo "Triângulo isósceles\n";
}