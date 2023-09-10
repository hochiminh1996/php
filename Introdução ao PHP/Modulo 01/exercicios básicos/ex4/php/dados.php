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
            <h2>Analisador de Número Real:</h2>

            <ul>

                <?php
                    $num = $_GET['real']?? 0;
                    $inteiro = intval($num);

                    echo "<li>Valor inteiro: " . $inteiro . "</li>";
                    echo "<li>Valor real: " . sprintf("%.3f",  $num - $inteiro) . "</li>";  

                ?>

            </ul>


            <a href="javascript:history.go(-1)"><input type="button" value="Voltar" id="btn"></a>

        </section>
    </main>
</body>

</html>