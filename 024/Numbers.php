<?php

abstract class Numbers implements Task, Task2 {

    abstract public function number() : int;

    public function show()
    {
        echo '<h1>' . $this->number() . '</h1>';
    }

}