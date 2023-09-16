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
    $dividendo = $_GET['dividendo'] ?? 0;
    $divisor = $_GET['divisor'] ?? 0;



    if (!$divisor == 0) {
        $div = $dividendo / $divisor;
        $resto = $dividendo % $divisor;
    } else {
        if ($divisor == 0) {
            $div = 0;
            $resto = 0;
        }
    }




    ?>


    <main>
        <section id="principal">
            <h1>Divisão</h1>
            <fieldset>
                <legend>Anatomia de uma divisão</legend>
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                    <label for="dividendo">Dividendo</label>

                    <input type="number" name="dividendo" id="dividendo" required step="0.01" placeholder="Divisor" autofocus>

                    <label for="divisor">Divisor</label>
                    <input type="number" required id="dividor" name="divisor" placeholder="Divisor" step="0.01">

                    <input type="submit" value="Calcular" id="btn">
                </form>
            </fieldset>
        </section>

        <section id="resultado">
            <h1>Estrutura de uma divisão</h1>
            <div id="caixa">
                <span id="superior_esquerdo"><?= $dividendo ?></span>
                <span id="superior_direito"><?= $divisor ?></span>
                <span id="inferior_esquerdo"><?= (int)$resto ?></span>
                <span id="inferior_direito"><?= (int)$div; ?></span>

            </div>
        </section>
    </main>
</body>

</html>