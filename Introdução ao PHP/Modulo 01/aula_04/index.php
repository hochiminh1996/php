<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Exemplo PHP</h1>
    <!-- 
        informações da linguagem são processadas no servidor (Hypertext Preprocessor). Preprocessor porque é processado anticipadamente no serviador.
        
        Por outro lado, informações client-side são enviadas do servidor para o client automaticamente.

     -->
    <?php
    date_default_timezone_set("America/Sao_Paulo");
    // definindo nossa timezone : gmt-3;

    echo "Data de hoje :" . date("d/m/Y") . "<br>";
    // Date = dia / M : mês / Y : ano

    echo "hora" . date("G:i:s");
    //G : hora / I: minutos / s : segundos.


    ?>
</body>

</html>