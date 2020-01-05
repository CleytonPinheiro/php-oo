<?php
require_once 'autoload.php';

use Alura\Banco\Modelo\Endereco;

$umEndereco = new Endereco ('Petropolis', 'bairro Qualquer', 'Minha rua', '30');
$outroEndereco = new Endereco ('Rio', 'centro', 'Uma rua ai', '150');

//$umEndereco->rua;
//echo $umEndereco->bairro;

//exit();


echo $umEndereco . PHP_EOL;
echo $outroEndereco;

