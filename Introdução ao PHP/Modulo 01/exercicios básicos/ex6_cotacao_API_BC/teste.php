<?php

$padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

    $inicio = date("m-d-Y", strtotime("-7 days")); //a data de hoje - 7 dias antes 

$fim = date("m-d-Y"); //pega a data atual do sistema.

$url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

// Está em aspas simples porque, no php, as aspas duplas fazem interpolação e interpretam os $. No caso, a interpolação pode tentar processar os $ que não são variáveis. Quando as aspas simples na URL, é necessário colocar o caractere de escape ( \ ) antes e depois das ''.

$dados = json_decode(file_get_contents($url), true);
// true => você pega os dados na estrutura de dados de um array. Se for false, vem na estrutura de dados de objeto.

// var_dump($dados);

$cotacao = $dados['value'][0]['cotacaoCompra'];
//acessando os dados 

//

var_dump($dados);
// echo sprintf("A cotação é %.2f. Seu valor em R$ $entrada equivale a %.2f", $cotacao, $entrada,  $entrada / $cotacao);

echo "Cotação: ".numfmt_format_currency($padrao, $cotacao, "USD");