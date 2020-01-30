<?php
/**
 * Created by PhpStorm.
 * User: moksleivis
 * Date: 2020-01-30
 * Time: 13:53
 */

namespace OOP;


class Mokiniai extends Bendruomene
{
    protected $vidurkis;

    public function __construct($vardas, $pavarde, $amzius, $lytis, $vidurkis)
    {
        parent::__construct($vardas, $pavarde, $amzius, $lytis);
        $this->vardas = $vardas;
        $this->pavarde = $pavarde;
        $this->amzius = $amzius;
        $this->lytis = $lytis;
        $this->vidurkis = $vidurkis;
    }


    public function getProfile(){
        $data[] = $this->vardas;
        $data[] = $this->pavarde;
        $data[] = $this->amzius;
        $data[] = $this->lytis;
        $data[] = $this->vidurkis;

        return $data;
    }
}