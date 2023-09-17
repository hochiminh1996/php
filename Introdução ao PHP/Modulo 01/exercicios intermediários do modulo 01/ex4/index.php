<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <main>
        <?php
        $v1 = $_REQUEST['v1']??0;
        $v2 = $_REQUEST['v2']??0;

        $peso1 = $_REQUEST['p1']??1;
        $peso2 = $_REQUEST['p2']??1;



        $media = ($v1 + $v2)/2;
        $media_ponderada = ($v1 * $peso1 + $v2 * $peso2) / ($peso1+$peso2) ?? 1;

        ?>
        <section id="caixa">
            <fieldset>
                <legend>Médias</legend>

                <form action="<?= $_SERVER['PHP_SELF']; ?>">
                    <label for="v1">Valor 1</label>
                    <input type="number" required placeholder="Valor 1" name="v1" autofocus name="v1" min="1">

                    <label for="p1">Peso 1</label>
                    <input type="number" required placeholder="Peso 1" name="p1" id="p1" min="1">

                    <label for="v2">Valor 2</label>
                    <input type="number" required placeholder="Valor 2" id="v2" name="v2" min="1">

                    <label for="p2">Peso 2</label>
                    <input type="number" required placeholder="Peso 2" name="p2" id="p2" min="1">

                    <input type="submit" value="Calcular" id="btn">
                </form>
            </fieldset>

        </section>

        <section id="resultado">
            <h2>Calculo de média</h2>
            <p>Valor 1: <?=number_format($_REQUEST['v1'] ??0, 2, ".",",")?> | Valor 2: <?=number_format($_REQUEST['v2']??0, 2, ".",",")?></p>
            <p>Peso 1: <?=number_format($_REQUEST['p1'] ??0, 2, ".",",")?> | Peso 2 <?=number_format($_REQUEST['p2'] ??0, 2, ".",",")?></p><br>

            <p>Média Aritmética: <?=number_format($media ??0, 2, ".",",")?> </p>
            <p>Média Aritmética Ponderada: <?=number_format($media_ponderada ??0, 2, ".",",")?>  </p>
        </section>
    </main>
</body>

</html>