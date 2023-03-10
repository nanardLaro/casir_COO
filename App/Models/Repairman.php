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

}