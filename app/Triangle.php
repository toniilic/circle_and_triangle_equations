<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Triangle extends Model
{
    public static function calculateSurface($a, $b, $c) {
        $sum = $a +$b + $c;
        $s = 1/2 * $sum;

        $sa = $s - $a;
        $sb = $s - $b;
        $sc = $s - $c;

        return sqrt($s * $sa * $sb * $sc);
    }

    public static function calculateCircumference($a, $b, $c) {
        return $a + $b + $c;
    }
}
