<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis</title>
</head>

<body>
    <!-- 
        Variáveis em PHP : $nome
        São Unidades de armazenamento de valores em memória (volátil)

        Constantes em php const PAIS = "Brasil";
        Também são unidades de armazenamento em memória. No entanto não são volátil.
        Constantes não usam o $
     -->

    <?php
    $nome = "Felippe";
    $sobrenome = "Marques";
    const PAIS = "Brasil";


    echo "Meu nome é $nome $sobrenome, muito prazer. Eu moro no " . PAIS;


    ?>

</body>

</html>