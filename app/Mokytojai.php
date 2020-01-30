<?php

namespace OOP;


class Mokytojai extends Bendruomene
{
    protected $destomasDalykas;
    protected $atlyginimas;

    public function __construct($vardas, $pavarde, $amzius, $lytis, $destomasDalykas)
    {
        parent::__construct($vardas, $pavarde, $amzius, $lytis);
        $this->vardas = $vardas;
        $this->pavarde = $pavarde;
        $this->amzius = $amzius;
        $this->lytis = $lytis;
        $this->destomasDalykas = $destomasDalykas;
    }
    public function getProfile(){
        $data[] = $this->vardas;
        $data[] = $this->pavarde;
        $data[] = $this->amzius;
        $data[] = $this->lytis;
        $data[] = $this->destomasDalykas;

        return $data;
    }
    public function setAtlygis($atlyginimas){
        $this->atlyginimas = $atlyginimas;
    }
    public function getAtlygis(){
        return $this->atlyginimas;
    }
}