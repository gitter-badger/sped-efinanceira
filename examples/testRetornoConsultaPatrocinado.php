<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
include_once '../bootstrap.php';

use NFePHP\eFinanc\Response;

$xml = file_get_contents('xml_retornos/retornoConsultaPatrocinado.xml');
$method = 'ConsultarInformacoesPatrocinado';
$resp = Response::readReturn($method, $xml);

var_dump($resp);