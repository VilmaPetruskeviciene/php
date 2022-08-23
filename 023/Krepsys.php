<?php

class Krepsys {

    const DYDIS = 500;
    private $pririnkta = 0;
    // private $list = [];

    public function deti(Grybas $grybas) : bool
    {
        if (!$grybas->sukirmijes && $grybas->valgomas) {
            $this->pririnkta += $grybas->svoris;
            // $this->list[] = $grybas;
        }
        return self::DYDIS > $this->pririnkta;
    }
}