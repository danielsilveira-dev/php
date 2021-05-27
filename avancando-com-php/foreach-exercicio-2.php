<?php

$contasCorrentes = [
	'123.456.789-10' => [
		'titular' => 'Daniel Silveira',
		'saldo' => 3500
	],
	'123.456.789-11' => [
		'titular' => 'Suzanne Silveira',
		'saldo' => 3500
	],
	'123.456.789-12' => [
		'titular' => 'Susie Merizio',
		'saldo' => 3500
	],
	'123.456.789-13' => [
		'titular' => 'Tharon Merizio',
		'saldo' => 3500
	],
];

$contasCorrentes['123.456.789-14'] = [
	'titular' => 'Sande Moraes',
	'saldo' => 3000,
];
// 123.456.789-10 Daniel Silveira $3500
// 123.456.789-11 Suzanne Silveira $3500
// 123.456.789-12 Susie Merizio $3500
// 123.456.789-13 Tharon Merizio $3500
// 0 Sande Moraes $3000
// Como não existe nenhum índice numérico, o próximo, seria o índice 0

foreach ($contasCorrentes as $cpf => $conta) {
	# code...
	echo $cpf . ' ' . $conta['titular'] . ' $' . $conta['saldo'] . PHP_EOL;
}