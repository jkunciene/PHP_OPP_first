<?php
class 	TransportoPriemone{
      private $modelis;
      private $marke;
      private $kaina;
      private $svoris;
      private $variklis;
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
    public function addVariklis($variklis){
        $this->variklis = $variklis;
    }
    public function addVariklioGalingumas($variklioGalingumas){
        if ($this->variklis == true){
            $this->variklioGalingumas = $variklioGalingumas;
        } else {
            echo "priemone neturi variklio";
        }

    }
    public function addMaksimalusGreitis($maksimalusGreitis){
        $this->maksimalusGreitis = $maksimalusGreitis;
    }
    public function addAprasymas($aprasymas){
        $this->aprasymas = $aprasymas;
    }
    public function addTalpinaZmoniu($talpinaZmoniu){
        $this->talpinaZmoniu = $talpinaZmoniu;
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
    public function showMaksimalusGreitis(){
            return $this->maksimalusGreitis;
    }
    public function showAprasymas(){
        return $this->aprasymas;
    }
    public function showTalpinaZmoniu(){
        return $this->talpinaZmoniu;
    }
}


$automobilis = new TransportoPriemone('penktas', 'BMW');
$automobilis->addKaina(5000);
$automobilis->addSvoris(3500);
$automobilis->addVariklioGalingumas(3);
$automobilis->addMaksimalusGreitis(220);
$automobilis->addAprasymas('Greitas fainas masiniukas, tik sunkiai suvairuojamas');
$automobilis->addTalpinaZmoniu(4);

?>
<ul>
    <?php foreach ($automobilis->show() as $value): ?>
    <li><?=$value; ?></li>
    <?php endforeach; ?>

<li><?=$automobilis->showKaina();?></li>
    <li><?=$automobilis->showSvoris(); ?></li>
    <li><?=$automobilis->showVariklioGalingumas(); ?></li>
    <li><?=$automobilis->showMaksimalusGreitis(); ?></li>
    <li><?=$automobilis->showAprasymas(); ?></li>
    <li><?=$automobilis->showTalpinaZmoniu(); ?></li>
</ul>