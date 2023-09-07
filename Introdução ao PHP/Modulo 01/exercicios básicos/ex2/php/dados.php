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
            <h2>Gerador</h2>
            <p>O valor gerado foi :
                <?php
                echo rand(0, 100);
                ?>
            </p>

            <form action="dados.php" method="get">

                <input type="submit" value="Gerar" id="btn">
            </form>
        </section>
    </main>
</body>

</html>