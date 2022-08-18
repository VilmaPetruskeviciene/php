<?php
class Tv {

    public $color;
    private $size;

    public function __construct($c, $s = '42"')
    {
        $this->color = $c;
        $this->size = $s;
    }

    public function __destruct()
    {
        echo '<h1>*****NUMIRO*********</h1>';
    }

    public function __get($a)
    {
        return $this->$a;
    }

    public function __set($kam, $ka)
    {
        $this->$kam = $ka;
    }

    public function show()
    {
        echo '<h1>**************</h1>';
    }

    public function showColor()
    {
        echo '<h1>' . $this->size . '</h1>';
    }



}