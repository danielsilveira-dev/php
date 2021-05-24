<?php

// Altura e peso
// Abaixo, Dentro, Acima do nível ideal

$peso = 66;
$altura = 1.58;
$imc = $peso / ($altura * $altura);
if($imc > 15 && $imc < 20){
	echo "Seu IMC está abaixo do recomendado! Seu IMC é de $imc.".PHP_EOL;
}else if($imc >= 20 && $imc <= 24.9){
	echo "Seu IMC está dentro do normal";
}else{
	echo "Acima do nível ideal".PHP_EOL;
};



/*
$num1 = 2;
$num2 = 3;
for($i = 0; $i <= 10; $i++) {
  echo PHP_EOL;
  echo "$num1 x $i = ".$num1 * $i;
  echo "$num2 x $i = ".$num2 * $i;
}

/*
for($count = 1; $count <= 100; $count++){
  if($count % 2 != 0) {
    echo $count . PHP_EOL;
  }
}
/*
for($count = 1; $count <= 100; $count++){
  if($count % 2 != 0) {
    echo $count . PHP_EOL;
  }
}

/*
Se $count dividido por 2 tiver o resto !=(diferente) de 0, imprime $count.
*/