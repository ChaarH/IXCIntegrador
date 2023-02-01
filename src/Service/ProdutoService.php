<?php

namespace App\Service;

use App\Service\IXCService;

class ProdutoService
{
    private $webservice;

    public function __construct()
    {
        $this->webservice = new IXCService();
    }

    public function getAll()
    {
        $params = [
            'qtype' => 'produtos.id', //campo de filtro
            'query' => '1', //valor para consultar
            'oper' => '=', //operador da consulta
            'page' => '1', //página a ser mostrada
            'rp' => '20', //quantidade de registros por página
            'sortname' => 'produtos.id', //campo para ordenar a consulta
            'sortorder' => 'desc' //ordenação (asc= crescente | desc=decrescente)
        ];

        return $this->webservice->get('produtos', $params, false);
    }

    public function getOne($cliente_id)
    {
        $params = array(
            'qtype' => 'produtos.id', //campo de filtro
            'query' => $cliente_id, //valor para consultar
            'oper' => '=', //operador da consulta
            'page' => '1', //página a ser mostrada
            'rp' => '20', //quantidade de registros por página
            'sortname' => 'produtos.id', //campo para ordenar a consulta
            'sortorder' => 'desc' //ordenação (asc= crescente | desc=decrescente)
        );

        return $this->webservice->get('produtos', $params, false);
    }
}
