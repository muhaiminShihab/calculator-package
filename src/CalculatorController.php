<?php

namespace Shihab\Calculator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CalculatorController extends Controller
{
    // fun to calculate (+)
    public function plus($a, $b)
    {
        echo $a + $b;
    }

    // fun to calculate (-)
    public function minus($a, $b)
    {
        echo $a - $b;
    }

    // fun to calculate (*)
    public function into($a, $b)
    {
        echo $a * $b;
    }

    // fun to calculate (/)
    public function devide($a, $b)
    {
        echo $a / $b;
    }
}
