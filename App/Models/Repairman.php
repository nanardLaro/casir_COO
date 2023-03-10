<?php

namespace App\Models;

class Repairman extends AbstractPeople
{

    private array $code;

    public function __construct(?string $name = null)
    {
        parent::__construct($name);
        $this->code = [];
    }

    public function ajouteCode(string $serialNumberMachine, int $code)
    {
        $this->code[$serialNumberMachine] = $code;
    }

}