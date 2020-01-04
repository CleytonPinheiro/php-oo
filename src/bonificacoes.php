<?php
require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Funcionario, Gerente};

$umFuncionario = new Funcionario('Cleyton P.', new CPF('545654835'),'Desenvolvedor', '1000');

$umaFuncionaria = new Alura\Banco\Modelo\Funcionario\Gerente
('Camilla P.', new CPF('4535434'),'tester', '2050');


$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);


echo $controlador->recuperaTotal();
