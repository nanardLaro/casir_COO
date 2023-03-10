<?php

namespace App\Models;

use App\Core\Tools;

abstract class AbstractPeople
{
    public string $id;
    public string $name;
    protected function init(){
        $this->id= Tools::getId(get_class($this));
    }

    public function __construct(?string $name = null)
    {
        $this->init();
        $this->$name = Tools::getValuesForCurrentIndex($this::class, 'firstnames');
    }


}