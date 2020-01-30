<?php
/**
 * Created by PhpStorm.
 * User: moksleivis
 * Date: 2020-01-30
 * Time: 14:25
 */

namespace OOP;


class Darbuotojai extends Bendruomene
{
    protected $pareigos;

    public function __construct($vardas, $pavarde, $amzius, $lytis, $pareigos)
    {
        parent::__construct($vardas, $pavarde, $amzius, $lytis);
        $this->vardas = $vardas;
        $this->pavarde = $pavarde;
        $this->amzius = $amzius;
        $this->lytis = $lytis;
        $this->pareigos = $pareigos;
    }
    public function getProfile(){
        $data[] = $this->vardas;
        $data[] = $this->pavarde;
        $data[] = $this->amzius;
        $data[] = $this->lytis;
        $data[] = $this->pareigos;

        return $data;
    }
}