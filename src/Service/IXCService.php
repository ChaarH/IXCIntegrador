<?php

namespace App\Service;

use Symfony\Component\Dotenv\Dotenv;
use App\Service\WebserviceClient;


class IXCService
{
    private $apiURL;
    private $apiToken;

    function __construct()
    {
        $dotenv = new Dotenv();
        $dotenv->load('.env');

        $this->apiURL = $_ENV['IXC_URL'];
        $this->apiToken = $_ENV['IXC_TOKEN'];
    }

    public function connect()
    {

        $host = $this->apiURL;
        $token = $this->apiToken;
        $selfSigned = true;

        $api = new WebserviceClient($host, $token, $selfSigned);

        return $api;
    }

    public function get($url, $params, $arrayFormat = false)
    {
        $api = $this->connect();

        $api->get($url, $params);
        return $api->getRespostaConteudo($arrayFormat); // false para json | true para array
    }

    public function data()
    {
        //requerindo arquivo do webservice
        require(__DIR__ . '/WebserviceClient.php');
        //url do sistema
        $host = $this->apiURL;
        //token gerado no cadastro do usuario (verificar permissões)
        $token = $this->apiToken;
        //true para certificado auto assinado
        $selfSigned = true;
        //instanciando api requerida na primeira linha do código
        $api = new WebserviceClient($host, $token, $selfSigned);
        //array de parâmetros do método
        $params = array(
            'id_contrato' => '2806'
        );
        $api->get('cliente_contrato_15464', $params); //Faz o GET na API na tabela desbloqueio_confianca
        $retorno = $api->getRespostaConteudo(true); // false para json | true para array

        return $retorno;
    }

    function getContratos()
    {
        require(__DIR__ . '/WebserviceClient.php');
        //url do sistema
        $host = $this->apiURL;
        //token gerado no cadastro do usuario (verificar permissões)
        $token = $this->apiToken; //token gerado no cadastro do usuario (verificar permissões)
        $selfSigned = true; //true para certificado auto assinado
        $api = new WebserviceClient($host, $token, $selfSigned);
        $params = array(
            'qtype' => 'cliente_contrato.id', //campo de filtro
            'query' => '1', //valor para consultar
            'oper' => '=', //operador da consulta
            'page' => '1', //página a ser mostrada
            'rp' => '20', //quantidade de registros por página
            'sortname' => 'cliente_contrato.id', //campo para ordenar a consulta
            'sortorder' => 'desc' //ordenação (asc= crescente | desc=decrescente)
        );
        $api->get('cliente_contrato', $params);
        $retorno = $api->getRespostaConteudo(false); // false para json | true para array

        return $retorno;
    }
}
