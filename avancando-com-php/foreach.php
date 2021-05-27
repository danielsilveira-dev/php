<?php
/*
$conta1 = [
  'titular' => 'Daniel',
  'saldo' => 1800
];
$conta2 = [
  'titular' => 'Suzanne',
  'saldo' => 10000
];
$conta3 = [
  'titular' => 'José',
  'saldo' => 800
];
$contasCorrentes = [ // Lista de contas correntes
  $conta1, 
  $conta2, 
  $conta3
];
foreach ($contasCorrentes as $conta){ // Para cada uma das $contasCorrentes como $conta, exibe o nome do 'titular'
  echo $conta['titular'].PHP_EOL;
}
*/
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

$contasCorrentes[12328578910] = [
  'titular' => 'Claudia',
  'saldo' => 2000
];

foreach ($contasCorrentes as $cpf => $conta) {
  # code...
  echo $conta['titular'].PHP_EOL;
};

// foreach ($contasCorrentes as $cpf => $conta){ // Para cada uma das $contasCorrentes como $conta, exibe o $cpf
//   echo $cpf." ".$conta['titular'].PHP_EOL;
// }