<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Strings</title>
</head>

<body>
    <?php
    $nome = "Felippe";
    $sobrenome = "Marques";
    const ESTADO = "SP";

    echo "Meu nome é $nome $sobrenome<br>";
    echo 'Meu nome é nome $nome $sobrenome<br>'; //não processa variaveis
    echo "Estado: " . ESTADO . "<br>";
    echo "Estados no ano de :" . date("Y") . "<br>";

    echo "$nome $sobrenome \"Marx\" (ADS)<br>";

    // string heredoc
    echo <<< TESTE
        Olá, mundo.
        Meu nome é $nome 

    TESTE;


    ?>
</body>

</html>