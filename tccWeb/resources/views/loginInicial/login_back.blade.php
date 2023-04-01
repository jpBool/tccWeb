
<?php
    session_start();
    // script foi chamado de index.php
    // include 'conexao.php';

    $email = $_POST["email"];
    $senha = $_POST["senha"];

        $stringdeconexao = "host=pgsql.projetoscti.com.br
                    port=5432
                    dbname=projetoscti9
                    user=projetoscti9
                    password=eq273b294";

    $conecta = pg_connect($stringdeconexao);

    $sql = "select * from gp2_usuarios where email = '$email' and senha = '$senha' ";
    if (pg_num_rows($res) > 0)
    {
         
        echo "Você tá logado";
    }
    else
    {

        echo "Voce n tá logado";
    }
?>