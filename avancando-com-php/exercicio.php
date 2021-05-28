<?php

$alunos = [
	00001 => [
		'nome' => 'Daniel',
		'sobrenome' => 'Silveira',
		'idade' => 36,
		'endereco' => 'Rua José Antônio Pereira',
		'cidade' => 'São José',
		'estado' => 'SC'
	],
];

$alunos[] = [
	'nome' => 'Suzanne',
	'sobrenome' => 'Silveira',
	'idade' => 31,
	'endereco' => 'Rua José Antônio Pereira',
	'cidade' => 'São José',
	'estado' => 'SC'
];

foreach ($alunos as $matricula => $aluno) {
	echo $matricula . " " 
	. $aluno['nome'] . " " 
	. $aluno['sobrenome']. " " 
	. $aluno['idade'] . " " 
	. $aluno['endereco']. " " 
	. $aluno['cidade'] . " " 
	. $aluno['estado'].PHP_EOL;
};