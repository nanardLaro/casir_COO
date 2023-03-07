<?php

namespace App\Models;

use App\Core\Tools;

class Caller extends AbstractModel {
    public string $what;
    public function __construct()
    {
        $this->init();
        $this->what = Tools::$faker->text();
    }

}