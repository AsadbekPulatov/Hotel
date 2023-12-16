<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Services\FileUploadService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::all();
        return view('admin.rooms.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'room' => 'required',
            'bed' => 'required',
            'image' => 'required|mimes:jpg,png,txt|max:2048',
        ]);

        $fileUploadService = new FileUploadService();
        $file = $request->file('image');

        // Pass the folder name to the upload method
        $fileName = $fileUploadService->upload($file, "rooms");

        $room = new Room();
        $room->title = $request->title;
        $room->text = $request->text;
        $room->room = $request->room;
        $room->bed = $request->bed;
        $room->image = $fileName;
        $room->save();

        return redirect()->route("rooms.index")->with('success', 'Mehmonxona yaratildi');
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        return view('admin.rooms.edit', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Room $room)
    {
        $room->title = $request->input('title');
        $room->text = $request->input('text');
        $room->room = $request->input('room');
        $room->bed = $request->input('bed');
        if ($request->hasFile('image')) {
            // Delete the old image

            $imagePath = public_path('uploads/rooms/' . $room->image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }

            $fileUploadService = new FileUploadService();
            $file = $request->file('image');

            // Pass the folder name to the upload method
            $fileName = $fileUploadService->upload($file, "rooms");

            $room->image = $fileName;
        }
        $room->save();
        return redirect()->route("rooms.index")->with('success', 'Mehmonxona tahrirlandi.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        // Delete the associated image file
        $imagePath = public_path('uploads/rooms/' . $room->image);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        // Delete the carousel item from the database
        $room->delete();

        return redirect()->route('rooms.index')->with('success', 'Mehmonxona o\'chirildi.');
    }
}
