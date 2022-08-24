<?php


class DoNumbers extends Numbers {

    public function number() : int
    {
        return rand(1, 7);
    }
}