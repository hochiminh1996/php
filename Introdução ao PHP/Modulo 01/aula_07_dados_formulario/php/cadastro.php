<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processando...</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>
    <header id="cabecalho">
        <h1>Resultado</h1>
    </header>

    <main id="principal">

        <section id="conteudo">
            <?php
            $nome = $_GET['nome'] ?? "NULL";
            $sobrenome = $_GET['sobrenome'] ??"NULL";
            // $_GET[]; é uma superglobal, assim como $_GET[] e $_REQUEST

            if($nome !=null and $sobrenome!=null){
                echo "<p>Olá, $nome $sobrenome. Bem-vindo. Hoje é ".date("d/m/Y");
            }else{
                echo "<p>Erro</p>";
            }
            
            ?>
            <a href="javascript:history.go(-1)">Voltar</a>
        </section>
    </main>
</body>

</html>