<?php
namespace Kosmosas;

class MarsoPalydovas {
    private static $palydovai = [null, null];
    public $name;

    static function create() {
        if(null === self::$palydovai[0]) {
           return self::$palydovai[0] = new self('Deimas');
        }
        if(null === self::$palydovai[1]) {
            return self::$palydovai[1] = new self('Fobas');
         }
         return self::$palydovai[rand(0, 1)];
    }

    private function __construct($name) {
        $this->name = $name;
    }
}