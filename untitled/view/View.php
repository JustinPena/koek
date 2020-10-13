<?php

namespace view;
use model\Model;
include_once ("model/Model.php");
class View
{
    private $model;
    private $content;

    public function __construct(Model $model)
    {
        $this->model = $model;
        $this->content ="KOEKJES";
        echo "<h2>".this->content."</h2";
    }

    public function viewContent(){
        $this->content = $this->model->getContent();
        $koek = $this->model->getKoek();

        echo "<br />Artikel is: ". getNaam();
        echo "<br />Prijs per kilo is: &euro; ". $koek->getPrijsperKilo();
    }
}

