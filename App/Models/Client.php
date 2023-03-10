<?php

namespace App\Models;

class Client extends AbstractPeople
{

    public float $cash;
    public bool $CB;

    public function __construct(?string $name = null, float $cash, bool $CB)
    {
        parent::__construct($name);
        $this->$cash = $cash;
        $this->CB = $CB;
    }

}