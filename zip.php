<?php

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Relatorio\OrcamentoZip;

require 'vendor/autoload.php';

$orcamentoZip = new OrcamentoZip;
$orcamento = new Orcamento();
$orcamento->valor = 400;

$orcamentoZip->exportar($orcamento);