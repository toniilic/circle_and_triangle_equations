<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CircleController extends Controller
{
    public function show(int $radius) {

        return [
            "type" => "circle",
            "radius" => $radius,
            "surface" => ($radius * $radius) * 3.14, #12.56,
            "circumference" => 2 * 3.14 * $radius,
        ];
    }
}
