<?php

class Pinigine {
    private $popieriniaiPinigai = 0;
    private $metaliniaiPinigai = 0;
    static private $piniguKiekis = 0;

    public function ideti(int $kiekis) : void {
        if ($kiekis <= 2) {
            $this->metaliniaiPinigai += $kiekis;
            self::$piniguKiekis += $kiekis;
        } else {
            $this->popieriniaiPinigai += $kiekis;
            self::$piniguKiekis += $kiekis;
        }
    }

    static public function skaiciuoti() : int {
        return self::$piniguKiekis;
    }
    
}