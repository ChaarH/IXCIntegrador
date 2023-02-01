<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Service\ProdutoService;



$produtoService = new ProdutoService;
$produtos = $produtoService->getAll();

show($produtos);

function show($data)
{
    echo '<pre>';
    print_r($data);
}
