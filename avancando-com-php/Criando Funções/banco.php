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

$contasCorrentes['123.456.789-12']['saldo'] -= 500;
$contasCorrentes['123.456.789-11']['saldo'] -= 500;

foreach ($contasCorrentes as $cpf => $conta) {
	# code...
	echo $cpf . ' ' . $conta['titular'] . ' $' . $conta['saldo'] . PHP_EOL;
}