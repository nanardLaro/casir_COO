<?php

namespace App\Services;
use App\Models\AbstractProduct;
use PaiementEnum;

class PaiementService
{

    public PaiementEnum $PaiementType;

    public function __construct(PaiementEnum $PaiementType)
    {
        $this->PaiementType = $PaiementType;
    }

    public function Pay(AbstractProduct $product){
        echo "Le prix est de ".$product->price.PHP_EOL;
        if ($this->PaiementType == PaiementEnum::CB){
            echo "BIP BIP Carte autorisée".PHP_EOL;
        }else{
            $somme = 0;
            while($somme < $product->price){
                echo "Il reste ".($product->price - $somme)."€ à payer.".PHP_EOL;
                $somme = $somme + (rand(50,200)/100);

            }
            if ($somme > $product->price){
                echo"La machine rend ".($somme - $product->price)."€".PHP_EOL;
            }
        }
    }

}