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
            <div id="dados">
                <?php
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

                echo "<p> Real: " . numfmt_format_currency($padrao, $_GET['real'], "BRL") . "</p>";
                
                echo "<p> Dólar: " .numfmt_format_currency($padrao, ($_GET['real']/4.98), "USD")."</p>";
                ?>
                <input type="button" value="Voltar" id="btn" onclick="javascript:history.go(-1)">
            </div>
        </section>
    </main>
</body>

</html>