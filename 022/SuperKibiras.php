<?php


class SuperKibiras extends Kibiras {

    public function prideti2Akmenis() : void
    {
        $this->akmenuKiekis += 2;
        self::$akmenuKiekisVisuoseKibiruose += 2;
    }

    public function prideti1Akmeni() : void
    {
        $this->akmenuKiekis *= 10;
        self::$akmenuKiekisVisuoseKibiruose *= 10;
    }

}