<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>%</title>
    <link rel="stylesheet" href="css/estilo.css">

</head>

<body>
    <?php
    $total_segundos = $_REQUEST['segundos'] ?? 0;
    $sobra = $total_segundos;


    $semanas = (int)($sobra / 604800);
    $sobra = $sobra % 604800;

    $dias = (int)($sobra/86400);
    $sobra = $sobra % 86400;

    $horas = (int)($sobra/3600);
    $sobra = $sobra % 3600;

    $minutos = (int)($sobra/60);
    $sobra = $sobra % 60;

    $segundos = $sobra;



    ?>

    <main>
        <section id="caixa">
            <fieldset>
                <legend>Tempo em segundos</legend>

                <form action="<?= $_SERVER['PHP_SELF']; ?>">
                    <label for="segundos">Total de segundos:</label>
                    <input type="number" name="segundos" id="segundos" placeholder="Segundos:" required step="1" autofocus>

                    <input type="submit" value="Reajustar" id="btn">
                </form>
            </fieldset>

        </section>

        <section id="resultado">
            <p>Os <?=$segundos??0?> equivalem a :</p>
            <ul>
                <li>[ <?=$semanas??0?> ] : Semanas</li>
                <li>[ <?=$dias??0?> ] : Dias</li>
                <li>[ <?=$horas??0?> ] : Horas</li>
                <li>[ <?=$minutos??0?> ] : Minutos</li>
                <li>[ <?=$segundos??0?> ] : Segundos</li>
            </ul>
        </section>
    </main>

</body>

</html>