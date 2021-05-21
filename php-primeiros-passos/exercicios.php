<?php

// $idade = 16;
// $acompanhante = 0;

// $maiorIdade = $idade >= 18;
// $menorDeIdade = $idade < 18;
// if($maiorIdade) {
//   echo "Você tem $idade anos e pode entrar sozinho.". PHP_EOL;
// }else if($menorDeIdade >= 16 && $acompanhante >= 1) {
//  echo "Você tem $idade anos e está acompanhado(a).". PHP_EOL;
//  echo "Pode entrar.";
// }else{
//   echo "Você tem $idade anos, não pode entrar!";
// }

// Tabuada
$num1 = 2;
$num2 = 3;
for($i = 0; $i <= 10; $i++) {
  echo PHP_EOL;
  echo "$num1 x $i = ".$num1 * $i;
  echo "$num2 x $i = ".$num2 * $i;
}