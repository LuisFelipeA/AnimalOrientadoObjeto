<?php

require_once 'Animal.php'; #importa a classe Animal

class Mamifero extends Animal {

    public $tempoGestacao;
    public $tempoAmamentacao;
    public $habitat;


    public function __construct($raca, $especie, $cor, $habitat) {
        parent::__construct($raca, $especie, $cor);
        $this->habitat = $habitat;
    }

    public function info(){
        echo " Especie:$this->especie</br> Raça: $this->raca</br> Cor: $this->cor</br> Habitat: $this->habitat</br>";
    }

    public function amamentar() {
        echo "Animal está amamentando...</br>";
    }

    public function reproduzir() {
        parent::reproduzir();
        echo "Vão vir filhotes...</br>";
    }

    public function emitiSom() {
        parent::emitiSom();
        echo "Au Au...</br>";
    }

}

$testMamifero = new Mamifero("Boxer", "Cachorro", "Marrom", "Domestico");
$testMamifero->amamentar();
$testMamifero->respirar();
$testMamifero->reproduzir();
$testMamifero->emitiSom();
$testMamifero->info();


?>