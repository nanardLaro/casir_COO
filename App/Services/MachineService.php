<?php

namespace App\Services;

use App\Models\AbstractMachine;
use App\Models\FoodAndColdDrinkMachine;
use App\Models\HotDrinkMachine;

class MachineService
{

    public AbstractMachine $machine;

    public function __construct(string $typeMachine)
    {
        if ($typeMachine == "cafe"){
            $this->machine = new HotDrinkMachine();
        }else{
            $this->machine = new FoodAndColdDrinkMachine();
        }

    }

    public function chooseProduct(int $rankProduct){

        if ($this->machine->Products[$rankProduct] != null){
            echo "Vous avez choisi ".$this->machine->Products[$rankProduct]->name.PHP_EOL;
        }else{
            echo"Ce produit n'existe pas.".PHP_EOL;
        }
    }

    public function deliverProduct(int $rankProduct){

        if ($this->machine::class == HotDrinkMachine::class){
                echo "psh psh la boisson chaude coule.";
        }else{
            echo "gling gling le produit tombe.";
        }
    }

}