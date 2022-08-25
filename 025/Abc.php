<?php
/*
class Abc {
    use A, B {
        A::read insteadOf B;
        A::read as read_bla;
    }
}
*/

class Abc extends C {
    use A; 
    public function read() {
        return '-ABC-';
    }
}