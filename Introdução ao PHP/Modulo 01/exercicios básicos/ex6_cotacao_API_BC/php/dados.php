<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processando</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>
    <main>
        <section>
            <h2>Conversão</h2>

            <!-- API DO BC

            https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/aplicacao#!/recursos/CotacaoDolarPeriodo#eyJmb3JtdWxhcmlvIjp7IiRmb3JtYXQiOiJ0ZXh0L2h0bWwiLCIkdG9wIjoxLCJkYXRhSW5pY2lhbCI6IjA5LTAxLTIwMjMiLCJkYXRhRmluYWxDb3RhY2FvIjoiMDktMDgtMjAyMyIsIiRvcmRlcmJ5IjoiBDEEIGRlc2MifSwicHJvcHJpZWRhZGVzIjpbMSwyXSwicGVzcXVpc2FkbyI6dHJ1ZSwiYWN0aXZlVGFiIjoidGFibGUiLCJncmlkU3RhdGUiOnsDMAM6W3sDQgMiBDEEIiwDQQN9LHsDQgMiBDIEIiwDQQN9XSwDMQM6e30sAzIDOltdLAMzAzp7fSwDNAM6e30sAzUDOnt9fSwicGl2b3RPcHRpb25zIjp7A2EDOnt9LANiAzpbXSwDYwM6NTAwLANkAzpbXSwDZQM6W10sA2YDOltdLANnAzoia2V5X2FfdG9feiIsA2gDOiJrZXlfYV90b196IiwDaQM6e30sA2oDOnt9LANrAzo4NSwDbAM6ZmFsc2UsA20DOnt9LANuAzp7fSwDbwM6IkNvbnRhZ2VtIiwDcAM6IlRhYmxlIn19


        -->
            <div id="dados">
                <?php
                /*
                    A API precisa de data inicial e final. Além disso, é interessante definir a data do sistema como solicitação para a última consulta para a cotação. Neste caso, é necessário definir duas variáveis e modificar a url : data_inicial (data atual - 7 dias) e data_final (data do dia do sistema)

                    OBS: observe o padrão de data na url.
                */
                $data_inicial = date("m/d/Y", strtotime("-7 days")); //data de 7 dias atrás

                $data_atual = date("m/d/Y"); //data do sistema 




                $urlAPI = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $data_inicial . '\'&@dataFinalCotacao=\'' . $data_atual . '\'&$top=1&$orderby=cotacaoVenda%20desc&$format=json&$select=cotacaoVenda,dataHoraCotacao';

                /*
                    A string urlAPI precisa estar em '', para evitar o processamento do $ (achar que é variável), via template string ("") do php.
                    
                    Nas partes que tiver '' da string, use o caracter de escape "\" e não haverá erro de sintaxe.

                    Os dados da url vem no formato JSON, é necessário utilzar uma função do php para tratar os dados
                */

                $dados_API = json_decode(file_get_contents($urlAPI), true);
                /*
                    json_decode é uma função especializada em capturar dados no formato JSON e converte-lo para a estrutura de dados + adquada.

                    Parâmetro  true/false
                    true => você pega os dados na estrutura de dados de um array. Se for false, vem na estrutura de dados de objeto.    
                */

                $cotacao = $dados_API['value'][0]['cotacaoVenda'];
                /*
                    Aqui estamos acessando um array : array value, posição [0], indice 'cotacaoVenda'
                */

                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
                //função para colocar a representação das moedas de acordo com o padrão pt-br.

                $real = numfmt_format_currency($padrao, $_GET['real'], "BRL");
                //real convertido para o padrão de moeda  (SIMBOLO DE R$).

                $dolar = numfmt_format_currency($padrao, $cotacao, "USD");
                //dólar convertido para o padrão de moeda (SIMBOLO USD)

                $conversao = numfmt_format_currency($padrao, $_GET['real'] / $cotacao, "USD");
                //conversão de real para dolar já com a simbologia USD

                echo "
                <p>Real: " . $real . "</p>
                <p>Dólar: " . $dolar . "</p>
                <p>Conversão: " . $conversao . "</p>";


                ?>


                <input type="button" value="Voltar" id="btn" onclick="javascript:history.go(-1)">
            </div>
        </section>
    </main>
</body>

</html>