<?php

namespace Sts\Controllers;

class Blog {

    public $Dados;

    public function index(){
        //echo "Controller da pagina Blog";
        $listarArtigo = new \Sts\Models\StsListarBlog();
        $this->Dados = $listarArtigo->listar();

        $carregarView = new \Core\ConfigView("sts/Views/blog/listarArtigo", $this->Dados);
        $carregarView->renderizar();

        //var_dump($this->Dados);
    }
}

?>