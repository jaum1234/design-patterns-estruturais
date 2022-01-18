<?php
namespace Alura\DesignPattern\Relatorio;

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Relatorio\ConteudoExportado;

class OrcamentoExportado implements ConteudoExportado
{
    private Orcamento $orcamento;

    public function __construct(Orcamento $orcamento)
    {
        $this->orcamento = $orcamento;
    }

    public function conteudo(): array
    {
        return [
            'valor' => $this->orcamento->valor,
            'quantidadeItens' => $this->orcamento->quantidadeItens
        ];
    }
}