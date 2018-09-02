<?php

Class Combattant {
    private $name;
    private $vie;
    private $attaque;
    private $defense;

    public function __construct($name)
    {
        $this->name = $name;
        $this->vie = 500;
        $this->attaque = 10;
        $this->defense = 5;
    }

    public function setVie($val = null){
        if(!is_null($val))
            $this->vie = $val;
    }
    public function setAttaque($val = null){
        if(!is_null($val))
            $this->attaque = $val;
    }
    public function setDefense($val = null){
        if(!is_null($val))
            $this->defense = $val;
    }

    public function getVie(){
        return $this->vie;
    }
    public function getAttaque(){
        return $this->attaque;
    }
    public function getDefense(){
        return $this->defense;
    }
    public function getName(){
        return $this->name;
    }

    public function attaque($combattant){
        $combattant->setVie($combattant->getVie() - $this->getAttaque() + $combattant->getDefense());
        $this->setAttaque($this->getAttaque() + 5);
        $this->setDefense($this->getDefense() + 2);
    }
}

class Combat {
    
    public static function lancer(){
        $combattants = ['yasuo', 'jax', 'brand'];
        foreach($combattants as $c){
            $$c = new Combattant($c);
        }

        $taille = count($combattants);

        for($i=0; $i<mt_rand(30,50);$i++){
            $c1 = mt_rand(1, $taille);
            $c2 = ($c1 + mt_rand(0,$taille - 2)) % $taille +1;
            $c1--;
            $c2--;

            if(mt_rand(1,10) == mt_rand(1,10)){
                $temp = mt_rand(1, $taille) - 1;
                ${$combattants[$temp]}->setAttaque(${$combattants[$temp]}->getAttaque() + mt_rand(10,25));
                echo "Le combattant " . ${$combattants[$temp]}->getName() . " vient de gagner un bonus d'attaque<br>";
            }

            if(mt_rand(1,10) == mt_rand(1,10)){
                $temp = mt_rand(1, $taille) - 1;
                ${$combattants[$temp]}->setDefense(${$combattants[$temp]}->getDefense() + mt_rand(10,20));
                echo "Le combattant " . ${$combattants[$temp]}->getName() . " vient de gagner un bonus de defense<br>";
            }
            //echo  "combat entre <b>$combattants[$c1]</b> et <b>$combattants[$c2]</b><br>";
            ${$combattants[$c1]}->attaque(${$combattants[$c2]});
            if($c1 == $c2) echo "erreur<br>";
        }
        foreach($combattants as $c) {
            echo "$c a " . $$c->getVie() . " points de vie<br>";
        }
    }
}

Combat::lancer();
