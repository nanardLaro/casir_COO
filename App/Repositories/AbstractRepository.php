<?php

namespace App\Repositories;

use App\Models\AbstractModel;

abstract class AbstractRepository {
    public function save(AbstractModel $model) {
        echo $model;
    }
}