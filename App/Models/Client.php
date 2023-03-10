<?php

namespace App\Models;

class Client extends AbstractPeople
{

    public PaiementEnum $paymentWay;

    public function __construct(?string $name = null, \PaiementEnum $paymentWay)
    {
        parent::__construct($name);
        $this->paymentWay = $paymentWay;
    }

}