<?php

namespace App\Http\Controllers;

use App\Slider;

class SliderController extends Controller
{
    public function sliders()
    {
        return Slider::all();
    }
}
