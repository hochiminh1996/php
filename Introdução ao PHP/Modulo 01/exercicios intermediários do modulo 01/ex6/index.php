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
        $padrao = numfmt_create("BRL", NumberFormatter::CURRENCY);

        $preco = $_REQUEST['preco'] ?? '0';
        $reajuste = $_REQUEST['reaj'] ?? '0';

        $novo_preco = ($preco * $reajuste) /100 + $preco;

        


    ?>

    <main>
        <section id="caixa">
            <fieldset>
                <legend>Reajustes de preço</legend>

                <form action="<?= $_SERVER['PHP_SELF']; ?>">
                    <label for="preco">Preço do produto:</label>
                    <input type="number"  name="preco" id="preco" placeholder="" required autofocus step="0.001" value="<?=$preco?>">

                    <label for="reaj">Qual será o percentual do reajuste?<span id="p">
                        
                    </span>%</label>
                    <input type="range" id="reaj" name="reaj" min="0" max="100" step="1" oninput="mudaValor();" value="<?=$reajuste?>">

                    <input type="submit" value="Reajustar" id="btn">
                </form>
            </fieldset>

        </section>

        <section id="resultado">
          <p>
            <?php 
                echo "Preço: ".numfmt_format_currency($padrao, $preco, "BRL")."<br>";
                echo "Reajuste:".$reajuste."%<br>";
                echo "Aumento:".numfmt_format_currency($padrao, $novo_preco, "BRL")."<br>";
            ?>
          </p>
        </section>
    </main>
    <script>
        mudaValor();

        function mudaValor(){
            p.innerText = reaj.value;
        }

    </script>
</body>

</html>