<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <?php 
        $ano = $_REQUEST['ano'] ?? date("Y");
        $data_ano = $_REQUEST['ano_final'] ?? date("Y");
        $atual = date("Y");

        if($ano>$data_ano){
            $msg = "[??]";
        }else{
            $idade = $data_ano - $ano;
        }


    ?>

    <main>
        <section id="caixa">
            <fieldset>
                <legend>Datas</legend>

                <form action="<?= $_SERVER['PHP_SELF']; ?>">
                    <label for="ano">Ano de nascimento:</label>
                    <input type="number"  name="ano" id="ano" placeholder="Ano: 1996" required autofocus max="<?=date("Y")?>" min="<?=date("Y") - 120?>">

                    <label for="ano_final">Quer saber sua idade em que ano? (estamos em <?=date("Y")?>)</label>

                    <input type="number" id="ano_final" name="ano_final" required placeholder="Ano: 2023">

                    <input type="submit" value="Calcular" id="btn">
                </form>
            </fieldset>

        </section>

        <section id="resultado">
            <p>
                Quem nasceu em <?=$_REQUEST['ano'] ?? 0?> terá <?=$idade?? $msg?> anos em <?=$data_ano?>. 
            </p>
        </section>
    </main>
</body>

</html>