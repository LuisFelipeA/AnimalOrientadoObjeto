<?php

require_once 'Animal.php'; #importa a classe Animal

class Ave extends Animal {

    public $tipoPenagem;
    public $voar;

    public function __construct($raca, $especie, $cor, $voar) {
        parent::__construct($raca, $especie, $cor);
        if ($voar == True){
            $this->voar = "O animal Voa";
        }
        else{$this->voar = "O animal não voa";}
    }

    public function info(){
        echo " Especie:$this->especie</br> Raça: $this->raca</br> Cor: $this->cor</br> $this->voar</br>";
    }

    public function reproduzir() {
        parent::reproduzir();
        echo "Vão vir ovos...</br>";
    }

    public function emitiSom() {
        echo "Piu...</br>";
    }

}

$testAve = new Ave("Canario", "Selvagem", "Amarelo", true);
$testAve->reproduzir();
$testAve->emitiSom();
$testAve->info();
?>