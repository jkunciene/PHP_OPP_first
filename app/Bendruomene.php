<?php
namespace OOP;

class Bendruomene
{
    protected $vardas;
    protected $pavarde;
    protected $amzius;
    protected $lytis;

    public function __construct($vardas, $pavarde, $amzius, $lytis)
    {
        $this->vardas = $vardas;
        $this->pavarde = $pavarde;
        $this->amzius = $amzius;
        $this->lytis = $lytis;
    }

    public function getProfile(){
        $data[] = $this->vardas;
        $data[] = $this->pavarde;
        $data[] = $this->amzius;
        $data[] = $this->lytis;

        return $data;
    }
}