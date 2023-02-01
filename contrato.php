<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Service\ContratoService;

if (empty($_GET['id'])) {
    die('Favor informar o id do cliente na URL');
}

$contratoService = new ContratoService();
$contratos = $contratoService->getOne($_GET['id']);
show($contratos);


function show($data)
{
    echo '<pre>';
    print_r($data);
}
