<?php

namespace App\Service;

use App\Service\IXCService;

class ContratoService
{
    private $webservice;

    public function __construct()
    {
        $this->webservice = new IXCService();
    }

    public function getAll()
    {
        $params = [
            'qtype' => 'cliente_contrato.id', //campo de filtro
            'query' => '1', //valor para consultar
            'oper' => '=', //operador da consulta
            'page' => '1', //página a ser mostrada
            'rp' => '20', //quantidade de registros por página
            'sortname' => 'cliente_contrato.id', //campo para ordenar a consulta
            'sortorder' => 'desc' //ordenação (asc= crescente | desc=decrescente)
        ];

        return $this->webservice->get('cliente_contrato', $params, false);
    }

    public function getOne($cliente_id)
    {
        $params = array(
            'qtype' => 'cliente_contrato.id', //campo de filtro
            'query' => $cliente_id, //valor para consultar
            'oper' => '=', //operador da consulta
            'page' => '1', //página a ser mostrada
            'rp' => '20', //quantidade de registros por página
            'sortname' => 'cliente_contrato.id', //campo para ordenar a consulta
            'sortorder' => 'desc' //ordenação (asc= crescente | desc=decrescente)
        );

        return $this->webservice->get('cliente_contrato', $params, false);
    }
}
