<?php

namespace App\Core;

use Faker\Factory;
use Faker\Generator;
use App\Models\Caller;

class Tools {

    public static Generator $faker;

    private static $ids = [];

    public static $firstnames = [];

    public static function init() : void {
        self::$faker = Factory::create();
        self::$firstnames = array_map('trim', file(self::getRessourcesPath().'firstnames.txt'));
    }

    private static function getRessourcesPath() : string {
        return __DIR__.'/../Ressources/';
    }

    public static function getId($classname) : string {
        if (!isset(self::$ids[$classname])) self::$ids[$classname] = 0;

        self::$ids[$classname]++;

        return array_slice(explode('\\',$classname),-1)[0].self::$ids[$classname];
    }

    public static function getValuesForCurrentIndex($classname, $index) : ?string {
        return self::$$index[self::$ids[$classname]];
    }

}