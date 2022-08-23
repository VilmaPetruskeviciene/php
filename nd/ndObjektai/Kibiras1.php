<?php

class Kibiras1 {
    protected $akmenuKiekis;

    public function prideti1Akmeni() : void {
        $this->akmenuKiekis++;
    }

    public function pridetiDaugAkmenu(int $kiekis) : void {
        $this->akmenuKiekis += $kiekis;
    }

    public function kiekPririnktaAkmenu() : int {
        return $this->akmenuKiekis;
    }
}
