<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções aritméticas</title>
</head>
<body>
    <?php 
        echo abs(-12.2)."<br>"; // É o valor sem o sinal.
        
        echo base_convert(1111011, 2, 10)."<br>";
        //Primeiro você passa o valor(em qualquer base). No segundo, você informa a base do valor passado; no terceiro, você informa p/ qual base será convertida.

        //funções de arrendondamento

        echo ceil(12.5). " - ".floor(12.5). " - ".round(12.5)."<br>";
        echo intdiv(5,2)."<br>";//2

        //modulo : resto
        echo (5%2)." <br>";

        //min e max de uma sequência.
        echo "O maior valor é :".max(2,5,10)."<br>";
        echo "O menor valor é :".min(2,5,10)."<br>";

        // PI
        echo pi()."<br>";
        echo pow(2,5);

        echo "<br> Raiz de 81 => ".sqrt(81);
        echo "<br> É possível fazer assim a raiz (valor ** (1/2)): ".(81 ** (1/2))."<br>";


        echo var_dump("1"+"2");
        // o php irá forçar uma conversão da string par número, resultando em 3.

        echo "<br>".(5**3);

    ?>
</body>
</html>