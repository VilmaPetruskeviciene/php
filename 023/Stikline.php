<?php

class Stikline {
    private $turis, $kiekis;

    public function __construct(int $turis)
    {
        $this->kiekis = 0;
        $this->turis = $turis;
    }

    public function ipilti(int $kiekis) : self
    {
        $this->kiekis = min($this->turis, $this->kiekis + $kiekis);
        return $this;
    }

    public function ispilti() : int
    {
        $buvo = $this->kiekis;
        $this->kiekis = 0;
        return $buvo;
    }


}