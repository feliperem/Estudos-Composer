<?php

    echo "Listar artigos".'<br><br>';

    //var_dump($this->Dados);

    foreach($this->Dados['artigos'] as $artigo){
        extract($artigo);
        echo "ID: {$id} <br>";
        echo "Titulo: {$titulo}<br>";
        echo "Conteudo: {$conteudo}<br><br>";

    }

?>