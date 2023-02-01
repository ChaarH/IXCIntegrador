<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Service\ClienteService;

if (empty($_GET['id'])) {
    die('Favor informar o id do cliente na URL');
}

$clienteService = new ClienteService;
$clientes = $clienteService->getOne($_GET['id']);

show($clientes);

function show($data)
{
    echo '<pre>';
    print_r($data);
}
