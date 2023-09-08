<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertendo...</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>
    <main>
        <section>
            <h2>Conversor:</h2>
            <?php
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            // criando um padrão p/ exibir a sigla da moeda de acordo com os padrões internacionais

            echo "<p>Valor real: " . numfmt_format_currency($padrao, $_GET['real'] ?? 0, "BRL");
            //


            echo "<p class=\"dolar\">Valor em dólar: " . numfmt_format_currency($padrao, $_GET['real'] / 4.98 ?? 0, "USD");

            ?>

            <input type="button" value="Voltar" id="btn" onclick="javascript:history.go(-1)">

        </section>
    </main>
</body>

</html>