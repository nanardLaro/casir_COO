<?php

namespace App\Models;

abstract class AbstractMachine
{

    public int $serialNumber;
    public string $machineBrand;
    public boolean $isWorking;
    public boolean $works;
    public int $accessCode;
    public AbstractPeople $PeopleUsing;
    /**
     * @var array <int, AbstractProduct>
     */
    public array $Products = [];


}