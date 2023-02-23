<?php
 
$nome = '';
 
if (isset($nome) && empty($nome) == false) {
    echo $nome;
}
 
function retornarEnderecoFormatado($endereco)
{
    return 'Endereço: ' . $endereco;
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Lixo Zero</title>
</head>
 
<body class="bg-gray-100">
    <form action="index.php" method="GET" class="w-full max-w-[768px] flex flex-col p-10 border shadow mx-auto mt-10 bg-white space-y-3">
        <?php
        if (isset($_GET['endereco'])) :
        ?>
            <div><b>Nome:</b> <?php echo $_GET['nome'] ?></div>
            <div><b>Endereço:</b> <?php echo $_GET['endereco'] ?></div>
            <div><b>Ponto de Referência:</b> <?php echo $_GET['pr'] ?></div>
            <div><b>Animais:</b> <?php echo $_GET['animais'] ?></div>
            <div><b>Local:</b> <?php echo $_GET['local'] ?></div>
            <div><b>Descrição:</b> <?php echo $_GET['descricao'] ?></div>

            <a href="index.php" class="text-blue-500 font-bold">Voltar</a>
        <?php
        return;
        endif;
        ?>

        <input type="text" name="nome" placeholder="Nome" class="py-2 px-2 border border-gray-300 outline-none">
        <input type="text" name="endereco" placeholder="Endereço" class="py-2 px-2 border border-gray-300 outline-none">
        <input type="text" name="pr" placeholder="Ponto de Referência" class="py-2 px-2 border border-gray-300 outline-none">
        <label for="animais">Possui animais próximo?</label>
        <select name="animais" id="animais">
        <option value="sim">Sim</option>
        <option value="nao">Não</option>
        </select>
        <label for="local">O lixo está em na Rua?</label>
        <select name="local" id="local">
        <option value="sim">Sim</option>
        <option value="nao">Não</option>
        </select>
        <input type="text" name="descricao" placeholder="Adicione detalhes." class="py-2 px-2 border border-gray-300 outline-none">
        <button type="submit" class="bg-blue-500 text-white font-bold py-2">Enviar</button>
    </form>
</body>
 
</html>