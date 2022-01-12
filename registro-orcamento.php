<?php

use Alura\DesignPattern\Http\CurlHttpAdapter;
use Alura\DesignPattern\Http\ReactPHPHttpAdapter;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\RegistroOrcamento;

require 'vendor/autoload.php';

$orcamento = new Orcamento();
$orcamento->valor = 200;
$orcamento->quantidadeItens = 5;

$orcamento->aprova();
$orcamento->finaliza();

$registroOrcamento = new RegistroOrcamento(new ReactPHPHttpAdapter);
$registroOrcamento->registrar($orcamento);