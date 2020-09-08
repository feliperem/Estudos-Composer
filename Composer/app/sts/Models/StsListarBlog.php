<?php

namespace Sts\Models;
use PDO;

class StsListarBlog{

    public $Resultado;

    public function listar() {
        //echo "Pesquisar artigos no BD";
        $listarArtigo = new \Sts\Models\Conn();

        $limit = 10;
        $result_artigo = "SELECT * FROM artigos LIMIT :limit";
        $resultado_artigos = $listarArtigo->getConn()->prepare($result_artigo);
        $resultado_artigos->bindParam(':limit', $limit, \PDO::PARAM_INT);
        $resultado_artigos->execute();

        $this->Resultado['artigos'] = $resultado_artigos->fetchAll();

        return $this->Resultado;

        //var_dump($this->resultado);

    }
}

?>