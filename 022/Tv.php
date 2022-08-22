<?php

class Tv {
    public $size;
    public static $list = [5 => 'TV3', 7 => 'LRT', 11 => 'LNK'];

    public function __construct($size) {
        $this->size = $size;
    }

    public function showList() {
        return self::$list;
    }
}