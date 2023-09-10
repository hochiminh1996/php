<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobais</title>
</head>

<body>

    <main>
        <pre>
            <?php
            /*
                SUPERGLOBAIS NO PHP
                $_GET => dados por url (array)
                $_POST => dados por baixo dos panos (mas não seguro)(array)
                $_REQUEST => captura dados tanto de $_get e $_post. Se tiver entrada de via get e post, ele pega todos os valores e converte em um único vetor (array)
                $_COOKIE => pequenos arquivos que armazenada dados da aplicação
                $_SESSION => armazenda a sessão de dados da aplicação
                $_ENV 
                $_SERVER
                $_FILES
                $GLOBALS => pega dados de todas as outras superglobais
            
            
            */

            setcookie("dia", "segunda", time() + 3600);
            //Criando um cookie com o identificador dia da semana, com o valor sábado e com duração de 1h = 3600s

            session_start(); //iniciando uma sessão
            $_SESSION['teste'] = "Funcionou";

            echo "<h2>Superglobais</h2>";


            echo "<h2>GET</h2>";
            var_dump($_GET);

            echo "<h2>POST</h2>";
            var_dump($_POST);


            echo "<h2>REQUEST</h2>";
            var_dump($_REQUEST);
            // o request está pegando os dados do post e get juntando tudo em um único aray.


            echo "<h2>Cookie</h2>";
            var_dump($_COOKIE);

            echo "<h2>Session</h2>";
            var_dump($_SESSION);

            echo "<h2>SERVER</h2>";
            var_dump($_SERVER);

            echo "<h2>GLOBALS</h2>";
            var_dump($GLOBALS);
            ?>
        </pre>

    </main>


</body>

</html>