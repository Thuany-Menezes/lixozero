<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projeto Lixo Zero</title>
    <link rel="stylesheet" href="/assets/css/bulma.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white py-10">
    <div class="w-full max-w-2xl mx-auto">
        <form method="POST" action="salvarBanco.php" class="flex flex-col space-y-3 w-full">
            <div>
                <span>Nome completo</span>
                <input name="nome_completo" placeholder="Seu nome aqui" type="text" class="w-full py-2 border-b-2 border-b-gray-200 focus:border-b-sky-500 outline-none">
            </div>

            <div>
                <span>E-mail</span>
                <input name="email" placeholder="E-mail" type="email" class="w-full py-2 border-b-2 border-b-gray-200 focus:border-b-sky-500 outline-none">
            </div>
            <div>
                <span>Endereço</span>
                <input name="endereco" placeholder="Endereço" type="text" class="w-full py-2 border-b-2 border-b-gray-200 focus:border-b-sky-500 outline-none">
            </div>
            <div>
                <span>Ponto de Referência</span>
                <input name="pontodereferencia" placeholder="Ponto de Referência" type="text" class="w-full py-2 border-b-2 border-b-gray-200 focus:border-b-sky-500 outline-none">
            </div>
                <div>
                <span>Quantidade de Lixo a ser recolhido</span>
                <select name="qtdlixo" type="text" class="w-full py-2 border-2 border-gray-200 focus:border-b-sky-500 outline-none">
                    <option value="Até 50 litros">Até 50 litros</option>
                    <option value="Entre 50 a 200 litros">Entre 50 a 200 litros</option>
                    <option value="Mais do que 200 litros">Mais do que 200 litros</option>
                        </select>
            </div>
            <div>
                <span>Há animais próximo do local?</span>
                <select name="animais" type="text" class="w-full py-2 border-2 border-gray-200 focus:border-b-sky-500 outline-none">
                    <option value="Sim">Sim</option>
                    <option value="Não">Não</option>
    
                </select>
            </div>
            <div>
                <span>Lixo na rua ou terreno?</span>
                <select name="local" type="text" class="w-full py-2 border-2 border-gray-200 focus:border-b-sky-500 outline-none">
                    <option value="rua">Rua</option>
                    <option value="terreno">Terreno</option>

                </select>
            </div>
            <div>
                <span>Sexo</span>
                <select name="veiculo" type="text" class="w-full py-2 border-2 border-gray-200 focus:border-b-sky-500 outline-none">
                    <option value="carro pequeno">Carro Pequeno</option>
                    <option value="carro médio">Carro Médio</option>
                    <option value="carro grande">Carro Grande</option>
                    <option value="Caminhão Pequeno">Caminhão Pequeno</option>
                    <option value="Caminhão Médio">Caminhão Médio</option>
                    <option value="Caminhão Grande">Caminhão Grande</option>
                    <option value="Caminhão Caçamba">Caminhão Caçamba</option>
                </select>
            </div>
            <div>
                <span>Algum detalhe a adicionar?</span>
                <input name="detalhe" placeholder="" type="text" class="w-full py-2 border-b-2 border-b-gray-200 focus:border-b-sky-500 outline-none">
            </div>

            <div>
                <button type="submit" class="bg-sky-500 py-3 px-6 border-sky-600 border hover:bg-sky-400 text-white font-bold">Enviar</button>
                <a href="verDados.php" target="_blank" class="bg-zinc-500 py-3 px-6 border-zinc-600 border hover:bg-zinc-400 text-white font-bold">Ver dados</a>
            </div>
        </form>
    </div>
</body>

</html>