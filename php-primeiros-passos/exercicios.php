<?php

$idade = 16;
$acompanhante = 0;

$maiorIdade = $idade >= 18;
$menorDeIdade = $idade < 18;
if($maiorIdade) {
  echo "Você tem $idade anos e pode entrar sozinho.". PHP_EOL;
}else if($menorDeIdade >= 16 && $acompanhante >= 1) {
 echo "Você tem $idade anos e está acompanhado(a).". PHP_EOL;
 echo "Pode entrar.";
}else{
  echo "Você tem $idade anos, não pode entrar!";
}