<?php

namespace App\Models;

use App\Core\Tools;

class Message extends AbstractModel {

    public string $message;
    public function __construct(string $message)
    {
        $this->init();
        $this->message = Tools::$faker->text(round(strlen($message) / 2));
    }
}