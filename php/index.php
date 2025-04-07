<?php
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/controllers/AlunniController.php';

$app = AppFactory::create();

$app -> get('/alunni', "AlunniController:index");

$app -> get('/alunni/{id}', "AlunniController:show");

$app -> post('/alunni', "AlunniController:create");

$app -> put('/alunni/{id}', "AlunniController:update");

$app -> delete('/alunni/{id}', "AlunniController:delete");

$app -> get('/alunni{id}/certificazioni', "CertificazioniContrller:index");

$app -> get('/alunni{id}/certificazioni/{id_cert}', "CertificazioniContrller:show");

$app -> post('/alunni{id}/certificazioni', "CertificazioniContrller:create");

$app -> put('/alunni{id}/certificazioni/{id_cert}', "CertificazioniContrller:update");

$app -> delete('/alunni{id}/certificazioni/{id_cert}', "CertificazioniContrller:delete");

$app->run();
?>