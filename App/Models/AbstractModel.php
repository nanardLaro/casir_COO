<?php

namespace App\Models;

use App\Core\Tools;

abstract class AbstractModel {

    private string $id;
    protected function init() {
        $this->id = Tools::getId(get_class($this));
    }

    public function __toString(): string
    {
        return implode(' / ', array_values(get_object_vars($this))).PHP_EOL;
    }
}