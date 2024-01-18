<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Service;
use App\Services\FileUploadService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'image' => 'required|mimes:jpg,png,txt|max:2048',
        ]);

        $fileUploadService = new FileUploadService();
        $file = $request->file('image');

        // Pass the folder name to the upload method
        $fileName = $fileUploadService->upload($file, "services");

        $service = new Service();
        $service->title = $request->title;
        $service->text = $request->text;
        $service->image = $fileName;
        $service->save();

        return redirect()->route("services.index")->with('success', 'Xizmat yaratildi');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $service->title = $request->input('title');
        $service->text = $request->input('text');
        if ($request->hasFile('image')) {
            // Delete the old image

            $imagePath = public_path('uploads/services/' . $service->image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }

            $fileUploadService = new FileUploadService();
            $file = $request->file('image');

            // Pass the folder name to the upload method
            $fileName = $fileUploadService->upload($file, "services");

            $service->image = $fileName;
        }
        $service->save();
        return redirect()->route("services.index")->with('success', 'Xizmat tahrirlandi.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        // Delete the associated image file
        $imagePath = public_path('uploads/services/' . $service->image);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        $id = $service->id;
        // Delete the carousel item from the database
        $service->delete();
        Room::where('service_id', $id)->delete();
        return redirect()->route('services.index')->with('success', 'Mehmonxona o\'chirildi.');
    }
}
