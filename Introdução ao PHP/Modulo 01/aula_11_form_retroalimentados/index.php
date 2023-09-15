<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <?php
    $v1 = $_GET['v1'] ?? 0;
    $v2 = $_GET['v2'] ?? 0;


    ?>
    <main id="principal">
        <section id="secao">
            <fieldset>
                <!-- <h1>Somando</h1> -->
                <legend>Formulário</legend>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
                    <label for="v1">Valor 1:
                    </label>
                    <input type="number" name="v1" id="v1" autocomplete required step="0.001" placeholder="Valor 1" value="<?=$v1?>">
                    <label for="v2">Valor 2:
                    </label>
                    <input type="number" name="v2" id="v2" autocomplete required step="0.001" placeholder="Valor 2" value="<?=$v2?>">

                    <label for="r">Resultado:</label>
                    <input type="number" disabled id="r" value="<?= $v1+$v2?>"> 
                    <input type="submit" value="Enviar">
                </form>


            </fieldset>
        </section>
    </main>
</body>

</html>