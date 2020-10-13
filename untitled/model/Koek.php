<?php

namespace model;
class Koek {
    private $id;
    private $naam;
    private $prijsperKilo;

    public function __construct($id, $naam, $prijs) {
        $this->id = $id;
        $this->naam = $naam;
        $this->prijsperKilo = $prijs;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNaam()
    {
        return $this->naam;
    }

    /**
     * @param mixed $naam
     */
    public function setNaam($naam): void
    {
        $this->naam = $naam;
    }

    /**
    * @return mixed
    */
    public function getPrijsperKilo()
    {
        return $this->prijsperKilo;
    }

    /**
     * @param mixed $prijsperKilo
     */
    public function setPrijsperKilo($prijsperKilo): void
    {
        $this->prijsperKilo = $prijsperKilo;
    }
}