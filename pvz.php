<?php
//class Vartotojas{
//    public $name; //savybes, public pasiekiama uzs klases ribu
//    public $email;
//    public $phone;
//}
//
//$user = new Vartotojas(); //sukuriu nauja objekta
//$user->name = "Jonas";
//$user->email = "janas@one.lt";
//$user->phone = '+37060075979';
//var_dump($user);
//echo $user->name;
//echo $user->phone;
//echo $user->email;

class Useriai{
    private $names;
    private $emails; //ypatybe
    private $phones;
    private $komentaras;


//    konstruktorius, kad nustatyti klases ypatybes, aprasytus klaseje
//    jei nebutu kontruktoriaus, kiekviena ypatybe reiktu isideti i atskira metoda
//    jei paliekame private


//    jei ypatybes butu public, konstruktoriaus nebereiktu
//    klaes ypatybes galetume issikviesti uz klases ribu
    public function __construct($vardai, $pastai, $telefonai)
    {
        $this->vardai = $vardai;
        $this->pastai = $pastai;
        $this->telefonai = $telefonai;

    }

    public function show(){ //geteriai grazina reikasmes

        $data[] = $this->vardai;
        $data[] = $this->pastai;
        $data[] = $this->telefonai;
        $data[] = $this->komentaras;

        return $data;
    }

    //seteriai
    public function addComment($komentaras){ //komentaras nera butinas, todel nerasome i
        $this->komentaras = $komentaras;
    }
}
$user1 = new Useriai('Jonas', 'janas@one.lt',+37060075979 );
$user1 ->addComment('Geras vyras');
$user2 = new Useriai('Petras', 'petraitis@gmail.com', +3706075454564);
?>
<ul>
   <?php foreach ($user1->show() as $value): ?>
    <li><?=$value; ?></li>
   <?php endforeach;?>

</ul>

