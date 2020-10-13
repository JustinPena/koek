<?php

namespace controller;
use model\Model;
include_once("model/Model.php");
use view\View;
include_once("view/View.php");
class Controller
{
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new Model();
        $this->view = new View($this->model);
    }

    /**
     * @return View
     */
    public function getView(): View
    {
        return $this->view;
    }

    public function updateModel($id, $naam, $prijs){
        $this->model->setKoek($id, $naam, $prijs);
    }
    public function updateView(){
        $this->view->viewContent();
    }
}