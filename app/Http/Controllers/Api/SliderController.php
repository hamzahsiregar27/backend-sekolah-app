<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->paginate(10);
        return response()->json([
            "response" => [
                "status" => 200,
                "message" => "list data sliders"
            ],
            "data" => $sliders
        ], 200);
    }
}
