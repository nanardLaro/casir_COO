<?php

namespace App\Models;

use App\Core\Tools;

class Message extends AbstractModel {

    public string $message;
    public string $callerName;
    public function __construct(Caller $caller,  ?string $message = null)
    {
        $this->init();
        $this->callerName = $caller->firstname;
        $this->message = trim( explode(' ', $caller->what)[0]. ' -> ' . Tools::$faker->text(round(strlen($caller->what) / 2)). ' '. $message);
    }
}