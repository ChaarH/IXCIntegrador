<?php

namespace App\Service;

use App\Service\IXCService;

class ClienteService
{
    private $webservice;

    public function __construct()
    {
        $this->webservice = new IXCService();
    }

    public function getAll()
    {
        $params = [
            'qtype' => 'cliente.id',
            // 'query' => '1', //valor para consultar
            'oper' => '=', //operador da consulta
            'page' => '1', //página a ser mostrada
            'rp' => '20', //quantidade de registros por página
            'sortname' => 'cliente.id', //campo para ordenar a consulta
            'sortorder' => 'desc' //ordenação (asc= crescente | desc=decrescente)
        ];

        return $this->webservice->get('cliente', $params, false);
    }

    public function getOne($clientId)
    {
        $params = array(
            'qtype' => 'cliente.id',
            'query' => $clientId, //valor para consultar
            'oper' => '=', //operador da consulta
            'page' => '1', //página a ser mostrada
            'rp' => '20', //quantidade de registros por página
            'sortname' => 'cliente.id', //campo para ordenar a consulta
            'sortorder' => 'desc' //ordenação (asc= crescente | desc=decrescente)
        );

        // if (!empty($clientId)) {
        //     $params['qtype'] = '{$clientId}.id';
        // }

        return $this->webservice->get('cliente', $params, false);
    }
}
