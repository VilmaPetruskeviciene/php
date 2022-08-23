<?php

class Stikline {
    private $turis;
    private $kiekis;

    public function __construct(int $turis) {
        $this->kiekis = 0;
        $this->turis = $turis;
    }

    public function ipilti(int $kiekis) : self {
        if ($kiekis <= $this->turis) {
            $this->kiekis += $kiekis;
            return $this;
        } else {
            $this->kiekis += $kiekis - ($kiekis - $this->turis);
            return $this;
        }  
    }
        
    public function ispilti() : int {
        $buvo = $this->kiekis;
        $this->kiekis = 0;
        return $buvo;
    }

}