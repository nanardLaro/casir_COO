<?php

namespace App\Core;

use Faker\Factory;
use Faker\Generator;
use App\Models\Caller;

class Tools {

    public static Generator $faker;

    private static $ids = [];

    public static $caller;

    public static function init() : void {
        self::$faker = Factory::create();
        self::$caller = new Caller();
    }

    public static function getId($classname) {
        if (!isset(self::$ids[$classname])) self::$ids[$classname] = 0;

        self::$ids[$classname]++;

        return array_slice(explode('\\',$classname),-1)[0].self::$ids[$classname];
    }

}