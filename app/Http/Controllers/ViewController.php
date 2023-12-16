<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Room;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){
        $carousels = Carousel::all();
        return view("front.index", compact("carousels"));
    }

    public function services(){
        return view("front.services");
    }

    public function booking(){
        $rooms = Room::all();
        return view("front.booking", compact('rooms'));
    }

    public function locations(){
        return view("front.locations");
    }
}
