<?php

namespace model;
use model\Koek;
include_once ("model\Koek.php");
class Model{

    private $content;
    private $koek;

    public function __construct()
    {
        $this->content = "Welkom bij de Bakker";
        $this->koek = new Koek('1', 'Bosche Bol', 15.00);
    }

    /**
     * @return Koek
     */
    public function getKoek()
    {
        return $this->koek;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setKoek ($id, $naam, $prijs){
        $this->koek = new Koek($id, $naam, $prijs);
    }
}