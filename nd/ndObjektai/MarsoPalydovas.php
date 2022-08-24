<?php

class MarsoPalydovas {
    private $title;
    static private $amount = 0;
    static private $palydovas1;
    static private $palydovas2;

    private function __construct() {
        if (self::$amount == 1) {
            $this->title = 'Deimas';
        } 
        else if (self::$amount == 2) {
            $this->title = 'Fobas';
        }
    }
   
    public function myTitle() {
        $this->title;
    }

    static public function naujasPalydovas() : MarsoPalydovas {
        if (!self::$palydovas1) {
            self::$amount = 1;
            self::$palydovas1 = new self;
            return self::$palydovas1;
        } else if (!self::$palydovas2) {
            self::$amount = 2;
            self::$palydovas2 = new self;
            return self::$palydovas2;
        } else {
            if (rand(1, 2) == 1) {
                return self::$palydovas1;
                } else {
                return self::$palydovas2;
            }
        }
    }
}