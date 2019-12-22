<?php

require_once 'src/Conta.php';

$SegundaConta = new Conta('25*****656','Camila');
//$primeiraConta->depositar(500);
//$primeiraConta->sacar(300);

//echo $SegundaConta->recuperaNomeTitular() . PHP_EOL;
//echo $SegundaConta->recuperarSaldo(). PHP_EOL;
//echo $SegundaConta->recuperaCpfTitular(). PHP_EOL;

echo Conta::recuperaNumeroDeContas();
