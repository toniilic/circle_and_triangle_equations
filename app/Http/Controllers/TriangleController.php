<?php

namespace App\Http\Controllers;

use App\Triangle;
use Illuminate\Http\Request;

class TriangleController extends Controller
{
    public function show(int $a, int $b, int $c) {

        // http://127.0.0.1:8000/triangle/3.0/4.0/5.0

        return [
            "type" => "triangle",
            "a" => $a,
            "b" => $b,
            "c" => $c,
            "surface" => Triangle::calculateSurface($a, $b, $c),
            "circumference" => Triangle::calculateCircumference($a, $b, $c)
        ];
    }
}
