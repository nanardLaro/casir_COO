<?php

namespace App\Models;

use App\Core\Tools;

class Caller extends AbstractModel {
    public string $firstname;
    public string $what;

    public function __construct(?string $what = null)
    {
        $this->init();
        $this->firstname = Tools::getValuesForCurrentIndex($this::class, 'firstnames');
        $this->what = $what ?? Tools::$faker->text();
    }

}