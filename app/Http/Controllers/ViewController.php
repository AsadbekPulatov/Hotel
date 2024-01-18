<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Carousel;
use App\Models\Room;
use App\Models\Service;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){
        $carousels = Carousel::all();
        $abouts = About::all();
        return view("front.index", compact("carousels", 'abouts'));
    }

    public function service(){
        $services = Service::all();
        return view("front.services", compact('services'));
    }

    public function service_single($id){
        $service = Service::findOrFail($id);
        $rooms = Room::where('service_id', $service->id)->get();
        return view("front.single_service", compact('service', 'rooms'));
    }

    public function booking(){
        $rooms = Room::all();
        return view("front.booking", compact('rooms'));
    }

    public function locations(){
        return view("front.locations");
    }
}
