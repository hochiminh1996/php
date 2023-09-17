<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de uma divisão</title>
    <link rel="stylesheet" href="css/estilo.css">
    <meta name="authot" content="Felippe">
</head>

<body>

    <?php
    $min = 1380.60;
    $sal = $_GET['sal'] ?? 0;

    $padrao = numfmt_create("pt_br", NumberFormatter::CURRENCY);


    $total = intdiv($sal, $min);
    //retorna o resultado inteiro da divisão

    $dif = $sal % $min;
    //o que sobra da divisão entre salário e salário mínimo

    //se o salário for menor que o mínimo, o resto é zero.
    if($sal<$min){
        $dif = 0;
    }

    ?>
    <main>
        <section id="principal">
            <fieldset>
                <legend>Salário</legend>
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">
                    <label for="sal">Salário</label>

                    <input type="number" name="sal" id="sal" required step="0.01" placeholder="R$" autofocus>
                    <span>Considerando o salário mínimo de <?= numfmt_format_currency($padrao, $min, "BRL") ?></span>

                    <input type="submit" value="Calcular" id="btn">
                </form>
            </fieldset>
        </section>

        <section id="resultado">
            <h1>Salário</h1>
            <div id="caixa">




                <p><?= numfmt_format_currency($padrao, $sal, "BRL"); ?> equivale a <?= $total ?>
                    salários mínimos + <?= $dif ?>
                </p>


            </div>
        </section>
    </main>
</body>

</html>