<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18];

// for($i = 0; $i < 7; $i++){ // Irá realizar um loop do indice 0 até o 6 do array
// 	echo $idadeList[$i] . PHP_EOL; // $idadeList[$i] irá exibir todos os itens do array
// }

// echo count($idadeList);

// ou
for($i = 0;$i < count($idadeList);$i++){
	echo $idadeList[$i].PHP_EOL;
}