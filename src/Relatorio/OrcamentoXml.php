<?php 
namespace Alura\DesignPattern\Relatorio;

use Alura\DesignPattern\Orcamento;

class OrcamentoXml 
{
    public function exportar(Orcamento $orcamento)
    {
        $element = new \SimpleXMLElement('<orcamento/>');
        $element->addChild('valor', $orcamento->valor);
        $element->addChild('quantidade_itens', $orcamento->quantidadeItens);

        return $element->asXML();
    }
}