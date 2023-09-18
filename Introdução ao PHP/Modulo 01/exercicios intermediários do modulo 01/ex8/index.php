<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <?php 
        $valor = $_REQUEST['valor'] ?? 0;

        $sobra = $valor;

        $cem = (int)($sobra/100);
        $sobra%=100;

        $cinquenta =(int)($sobra/50);
        $sobra%=50;

        $dez = (int)($sobra/10);
        $sobra%=10;

        $dois = (int)($sobra/2);
        $sobra%=2;

        

        

    ?>

    <main>
        <section id="principal">
            <fieldset>
                <legend>Dinheiro</legend>
                <form action="<?=$_SERVER['PHP_SELF'];?>" method="get">
                    <label for="valor">Valor: </label>
                    <input type="number" id="valor" name="valor" placeholder="R$" required autofocus step="1">
                    <input type="submit" id="btn">
                </form>
            </fieldset>
        </section>

        <section id="caixa">
           <p>Valor: <?=$valor?></p>
            <ul>
                <!-- <li>R$: </li> -->
            <li><img src="img/1-real.jpg" alt="" class="img" class="img"><?=$sobra?></li>

                <li><img src="img/2-reais.jpg" alt="" class="img"><?=$dois?></li>
                <li><img src="img/10-reais.jpg" alt="" class="img"><?=$dez?></li>
                <li><img src="img/50-reais.jpg" alt="" class="img"><?=$cinquenta?> </li>
                <li><img src="img/100-reais.jpg" alt="" class="img"><?=$cem?></li>
            </ul>
        </section>
    </main>
</body>

</html>