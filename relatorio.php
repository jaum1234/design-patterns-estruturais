<?php


use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Relatorio\OrcamentoExportado;
use Alura\DesignPattern\Relatorio\ArquivoXmlExportado;
use Alura\DesignPattern\Relatorio\ArquivoZipExportado;

require 'vendor/autoload.php';

$orcamento = new Orcamento();
$orcamento->valor = 500;
$orcamento->quantidadeItens = 5;

$orcamentoExportado = new OrcamentoExportado($orcamento);
$orcamentoExportadoXml = new ArquivoZipExportado('orcamento');
echo $orcamentoExportadoXml->salvar($orcamentoExportado);