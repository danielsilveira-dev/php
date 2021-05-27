<?php
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
$contasCorrentes = [$conta1, $conta2, $conta3];
for($i = 0;$i < count($contasCorrentes);$i++){
  echo $contasCorrentes[$i]['titular'].PHP_EOL;
}