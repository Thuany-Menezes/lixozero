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

$data = $database->select('formulario', [
    'nome_completo',
    'email',
    'endereco',
    'pontodereferencia',
    'qtdlixo',
    'animais',
    'local',
    'veiculo',
    'detalhe'
]);

foreach ($data as $dados){?>
    <tr>
    <td><?php echo "Nome Completo: " . $dados['nome_completo'] . "<br>" ?></td>
    <td><?php echo "E-mail: " . $dados['email'] . "<br>"; ?></td>
    <td><?php echo "Endereço: " . $dados['endereco'] . "<br>"?>;
<td><?php echo "Ponto de Referência: " . $dados['pontodereferencia'] . "<br>"; ?></td>
<td><?php echo "Quantidade de Lixo: " . $dados['qtdlixo'] . "<br>"; ?></td>
<td><?php echo "Animais Próximos: " . $dados['animais'] . "<br>"; ?></td>
<td><?php echo "Local: " . $dados['local'] . "<br>"; ?></td>
<td><?php echo "Veículo: " . $dados['veiculo'] . "<br>"; ?></td>
<td><?php echo "Detalhe: " . $dados['detalhe'] . "<br><hr>"; ?></td><?php
 }?></td>
