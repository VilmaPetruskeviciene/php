<?php

class Kibiras2 {
    protected $akmenuKiekis;
    static private $akmenuKiekisVisuoseKibiruose = 0;

    static public function kiekYraAkmenu() : int {
        return self::$akmenuKiekisVisuoseKibiruose;
    }

    public function prideti1Akmeni() : void {
        $this->akmenuKiekis++;
        self::$akmenuKiekisVisuoseKibiruose++;
    }

    public function pridetiDaugAkmenu(int $kiekis) : void {
        $this->akmenuKiekis += $kiekis;
        self::$akmenuKiekisVisuoseKibiruose += $kiekis;
    }

    public function kiekPririnktaAkmenu() : int {
        return $this->akmenuKiekis;
    }
}
