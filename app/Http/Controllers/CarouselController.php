<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Services\FileUploadService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carousels = Carousel::all();
        return view("admin.carousels.index", compact('carousels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.carousels.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $count = Carousel::all()->count();
        if ($count >= 4){
            return redirect()->route("carousels.index")->with('error', "Boshqa rasm qo'shib bo'lmaydi");

        }
        $request->validate([
            'image' => 'required|mimes:jpg,png,txt|max:2048',
        ]);

        $fileUploadService = new FileUploadService();
        $file = $request->file('image');

        // Pass the folder name to the upload method
        $fileName = $fileUploadService->upload($file, "carousels");

        $carousel = new Carousel();
        $carousel->image = $fileName;
        $carousel->save();

        return redirect()->route("carousels.index")->with('success', 'Carousel yaratildi');
    }

    /**
     * Display the specified resource.
     */
    public function show(Carousel $carousel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carousel $carousel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carousel $carousel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carousel $carousel)
    {
        // Delete the associated image file
        $imagePath = public_path('uploads/carousels/' . $carousel->image);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        // Delete the carousel item from the database
        $carousel->delete();

        return redirect()->route('carousels.index')->with('success', 'Carousel o\'chirildi');
    }
}
