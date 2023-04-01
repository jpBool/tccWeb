<?php

$stringdeconexao = "host=pgsql.projetoscti.com.br
                    port=5432
                    dbname=projetoscti9
                    user=projetoscti9
                    password=eq273b294";

    $conecta = pg_connect($stringdeconexao);
    
    if (!$conecta) {
        echo '<script language="javascript">';
        echo "alert('Não foi possível estabelecer uma conexão com o banco de dados :c')";
        echo '</script>';	
        
        exit;
    }
    /*else
     {
         echo '<script language="javascript">';
         echo "alert('Conexão estabelecida com o banco de dados!')";
         echo '</script>';	
     }*/
?>