<?php

require_once './vendor/autoload.php';
require './src/service/IXCService.php';

$ixc = new IXCService();
$data =  $ixc->getContratos();

echo '<pre>';
print_r($data);
