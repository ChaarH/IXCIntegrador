<?php

namespace CarlosAires\IXCIntegracao\Service;

use App\Service\IXCService;

class UsuariosService
{
    private $webservice;

    public function __construct()
    {
        $this->webservice = new IXCService();
    }

    public function getAll()
    {
        $params = array(
            'qtype' => 'usuarios.id', //campo de filtro
            'query' => '1', //valor para consultar
            'oper' => '=', //operador da consulta
            'page' => '1', //página a ser mostrada
            'rp' => '20', //quantidade de registros por página
            'sortname' => 'usuarios.id', //campo para ordenar a consulta
            'sortorder' => 'desc' //ordenação (asc= crescente | desc=decrescente)
        );

        return $this->webservice->get('usuarios', $params, true);
    }
}
