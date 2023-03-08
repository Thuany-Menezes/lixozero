<?php

require_once __DIR__ . '/vendor/autoload.php';

use Medoo\Medoo;
 
// Connect the database.
$database = new Medoo([
    'type' => 'mysql',
    'host' => 'localhost',
    'database' => 'formulario',
    'username' => 'root',
    'password' => ''
]);

$database->insert('formulario', [
    'nome_completo' => $_POST['nome_completo'],
    'email' => $_POST['email'],
    'endereco' => $_POST['endereco'],
    'pontodereferencia' => $_POST['pontodereferencia'],
    'qtdlixo' => $_POST['qtdlixo'],
    'animais' => $_POST['animais'],
    'local' => $_POST['local'],
    'veiculo' => $_POST['veiculo'],
    'detalhe' => $_POST['detalhe']

]);
echo json_encode([
    'sucesso' => true,
    'mensagem' => 'Agora salvei com sucesso de novo!',
    'dados_enviados' => $_POST
]);

// var_dump($_GET);
var_dump($_POST);
