<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18];
// $idadeList[7] = 20; // Colocando indice para adicionar 20 aos items do array
// $idadeList[count($idadeList)] = 20; // Colocando indice automatico para colocar items no array(Caso eu não souber da quantidade de items em um array)
$idadeList[] = 20; // Adicionando items no array sem precisar inserir indice(melhor forma)
foreach ($idadeList as $idade) {
	# code...
	echo $idade.PHP_EOL;
}

// for($i = 0;$i < count($idadeList);$i++){
// 	echo $idadeList[$i].PHP_EOL;
// }
// $umaIdade = $idadeList[0];
// echo $umaIdade;