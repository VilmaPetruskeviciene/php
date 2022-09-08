<?php

namespace App;

use App\Messages as M;
use App\DB\Json;

class Validations
{

    public static function nameValid(string $name)
    {
        if (strlen($name) < 3 || strtolower($name)) {
            M::add('Vardas ir pavardė turi būti ilgesni nei 3 simboliai ir iš didžiosios raidės!', 'alert');
            return 0;
        } else {
            return 1;
        }
    }
    public static function idValid(string $ak)
    {
        if (strlen($ak) !== 11) {
            M::add('Neteisingas asmens kodo  formatas', 'alert');
            return  0;
        }
        foreach (Json::connect()->showAll() as $val) {
            if ($val['ak'] == $ak) {
                M::add('Vartotojas su tokiu asmens kodu jau yra sistemoje', 'alert');
                return  0;
            }
        }

        return 1;
    }
}
