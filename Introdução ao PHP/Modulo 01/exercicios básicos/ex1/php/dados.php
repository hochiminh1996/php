<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>
    <section>
        <h1>Resultado</h1>
        <div id="result">
            <?php
            echo "<p>O número escolhido foi: " . ($_GET['numero'])  . "</p><br>";
            echo "<p>O número antecessor é: " . ($_GET['numero'] - 1)  . "</p><br>";
            echo "<p>O número sucesor é: " . ($_GET['numero'] + 1)  . "</p><br>";
            ?>
            <a href="javascript:history.go(-1)"><input type="button" name="" id="btn1" value="Voltar"></a>
        </div>

    </section>
</body>

</html>