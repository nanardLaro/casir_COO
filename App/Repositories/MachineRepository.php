<?php

namespace App\Repositories;

use App\Core\Tools;
use App\Models\AbstractProduct;

class MachineRepository extends AbstractRepository
{

    public function createProduct(int $idProduct) : AbstractProduct{
        $fileProduct = file_get_contents('../Ressources/Product.txt');
        $rows = explode('\n', $fileProduct);
        arra_shift($rows);
        if (sizeof($rows) >= $idProduct){
            for($i = 0; $i < $idProduct; $i++){

            }
        }

    }

}