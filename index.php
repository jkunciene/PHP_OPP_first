<?php
class 	TransportoPriemone{
      private $modelis;
      private $marke;
      private $kaina;
      private $svoris;
      private $variklioGalingumas;
      private $maksimalusGreitis;
      private $aprasymas;
      private $talpinaZmoniu;


    public function __construct($modelis, $marke){
        $this->modelis = $modelis;
        $this->marke = $marke;
    }
    //seteriai
    public function addKaina($kaina){
        $this->kaina = $kaina;
    }
    public function addSvoris($svoris){
        $this->svoris = $svoris;
    }
    public function addVariklioGalingumas($variklioGalingumas){
        $this->variklioGalingumas = $variklioGalingumas;

    }
    //geteriai
    public function show(){ //geteriai grazina reikasmes
        $data[] = $this->modelis;
        $data[] = $this->marke;
        return $data;
    }
    public function showKaina(){
        return $this->kaina;
    }
    public function showSvoris(){
        return $this->svoris;
    }
    public function showVariklioGalingumas(){
        return $this->variklioGalingumas;
    }

}


$automobilis = new TransportoPriemone('penktas', 'BMW');
$automobilis->addKaina(5000);
$automobilis->addSvoris(3500);
$automobilis->addVariklioGalingumas(3);
?>
<ul>
    <?php foreach ($automobilis->show() as $value): ?>
    <li><?=$value; ?></li>
    <?php endforeach; ?>

<li><?=$automobilis->showKaina();?></li>
    <li><?=$automobilis->showSvoris(); ?></li>
    <li><?=$automobilis->showVariklioGalingumas(); ?></li>
</ul>