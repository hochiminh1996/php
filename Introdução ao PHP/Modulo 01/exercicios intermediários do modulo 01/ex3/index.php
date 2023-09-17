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
    $raiz = $_REQUEST['raiz'] ?? 0;

    $valor_raiz = sqrt($raiz);

    ?>


    <main>
        <section id="principal">
            <fieldset>
                <legend>Raiz</legend>
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">
                    <label for="raiz">Número</label>

                    <input type="number" name="raiz" id="raiz" required step="0.01" placeholder="Raiz² ou ³" autofocus>


                    <input type="submit" value="Calcular" id="btn">
                </form>
            </fieldset>
        </section>

        <section id="resultado">
            <h1>Raiz</h1>
            <div id="caixa">

                <p>
                    A raiz quadrada de <?= $raiz ?> é <?= number_format($valor_raiz, 2, ".", ",")?>

                </p>

                <p>
                    A raiz cúbica de <?= $raiz ?> é <?=
                    number_format($raiz ** (1/3), 2, ".",",") ;  
                    ?>

                </p>

            </div>
        </section>
    </main>
</body>

</html>