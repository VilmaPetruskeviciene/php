<?php

class Kibiras {

    protected $akmenuKiekis;
    static private $akmenuKiekisVisuoseKibiruose = 0;
    static private $manoKibiras;

    static public function kiekYraAkmenu() : int
    {
        return self::$akmenuKiekisVisuoseKibiruose;
    }

    static public function naujasKibiras() : Kibiras
    {
        return self::$manoKibiras ?? self::$manoKibiras = new self;
    }

    private function __construct()
    {
        $this->akmenuKiekis = 0;
    }

    private function __clone(){}

    public function __wakeup()
    {
        throw new Exception('Šlovė Meškėnams!');
    }

    public function prideti1Akmeni() : void
    {
        $this->akmenuKiekis++;
        self::$akmenuKiekisVisuoseKibiruose++;
    }

    public function pridetiDaugAkmenu(int $kiekis) : void
    {
        $this->akmenuKiekis += $kiekis;
        self::$akmenuKiekisVisuoseKibiruose += $kiekis;
    }

    public function kiekPririnktaAkmenu() : int
    {
        return $this->akmenuKiekis;
    }

    public function kiekBendraiYraAkmenu() : int
    {
        return self::$akmenuKiekisVisuoseKibiruose;
    }


}