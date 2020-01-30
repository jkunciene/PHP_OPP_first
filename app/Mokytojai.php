<?php

namespace OOP;


class Mokytojai extends Bendruomene
{
    protected $destomasDalykas;

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
}