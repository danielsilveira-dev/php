<?php

// function adiciona2($x)
// {
// 	return $x + 2;
// };
// $resultado = adiciona2(10);
// echo $resultado . PHP_EOL;

// exit();

function sacar($conta, $valorASacar)
{
	if($valorASacar > $conta['saldo']) {
		exibeMensagem("Você não pode sacar");
	}else{
		$conta['saldo'] -= $valorASacar;
	};
	return $conta;

}

function exibeMensagem($mensagem) 
{
	echo $mensagem . PHP_EOL;
}

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
		'saldo' => 300
	],
	'123.456.789-13' => [
		'titular' => 'Tharon Merizio',
		'saldo' => 3500
	],
];

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 500);
$contasCorrentes['123.456.789-12'] = sacar($contasCorrentes['123.456.789-12'], 500);

foreach ($contasCorrentes as $cpf => $conta) {
	# code...
	exibeMensagem($cpf . ' ' . $conta['titular'] . ' $' . $conta['saldo']);
}