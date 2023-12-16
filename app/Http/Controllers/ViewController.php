<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Room;
use App\Models\Service;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){
        $carousels = Carousel::all();
        return view("front.index", compact("carousels"));
    }

    public function service(){
        $services = Service::all();
        return view("front.services", compact('services'));
    }

    public function booking(){
        $rooms = Room::all();
        return view("front.booking", compact('rooms'));
    }

    public function locations(){
        return view("front.locations");
    }
}
