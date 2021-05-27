<?php

$contasCorrentes = [ // Modificando os índices do array
  12345678910 => [
    'titular' => 'Daniel',
    'saldo' => 1800
  ], 
  12325478910 => [
    'titular' => 'Suzanne',
    'saldo' => 10000
  ], 
  12345377910 => [
    'titular' => 'José',
    'saldo' => 800
  ]
];

$contasCorrentes[] = [
  'titular' => 'Claudia',
  'saldo' => 2000
];

$contasCorrentes[] = [
  'titular' => 'Daniel',
  'saldo' => 5000
];

$contasCorrentes[] = [
  'titular' => 'Carol',
  'saldo' => 5000
];


foreach ($contasCorrentes as $cpf => $conta) {
  echo $cpf." ".$conta['titular']." ".$conta['saldo'].PHP_EOL;
};
