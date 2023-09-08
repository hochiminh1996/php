<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerando...</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>
    <main>
        <section>
            <h2>Conversor:</h2>
            <p>
                <?php
                echo "R$: " . $_GET['real'] . "<br>";

                ?>
            </p>
            <p class="dolar">
                <?php
                echo "US$: ".sprintf("%.2f", ($_GET['real'] / 4.98));
                ?>
            </p>
            <a href="javascript:history.go(-1)"><input type="button" value="Voltar" id="btn"></a>

        </section>
    </main>
</body>

</html>