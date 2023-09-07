<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de dados</title>
</head>

<body>
    <h3>Tipos primitivos no PHP</h3>

    <?php
    // Tipos primitivos => string, int (ou integer), float (ou double), boolean 
    // Tipos escalares => Object e array
    // Tipos especiais => null, mixed (representa todos os tipos (int, float, boolean e etc)), resource e callabe.

    $num = 0x1112;
    // 0x => valor em hex
    // 0b => valor em binario
    // 0  => valor em octal


    $nome = "Felippe";
    $verdadeiro = true;
    $val = 1200.20;
    $val1 = (int)1200.20; //casting de tipo


    var_dump($nome, $verdadeiro, $val, $val1);

    // No php, true = 1. Falso é vazio/0/null
    // Ao usar print ou echo, se a variável for false, ele não mostrará o valor

    $casado = false;

    echo "Valor de casado $casado";


    $paises = ["Brasil", "Rússia", "Índia", "China", "África do Sul"];

    var_dump($paises);


    class Pessoa
    {
        private string $nome;
        private int $idade;

        public function __construct(string $nome = null, int $idade = null)
        {
           
        }
    }

    $p = new Pessoa;
    echo "\n";

    var_dump($p);






    ?>
</body>

</html>