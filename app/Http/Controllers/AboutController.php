<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::all();
        return view('admin.abouts.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.abouts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required',
        ]);


        $about = new About();
        $about->title = $request->title;
        $about->text = $request->text;
        $about->save();

        return redirect()->route("abouts.index")->with('success', 'Biz haqimizda ma\'lumot yaratildi');
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        return view('admin.abouts.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        $about->title = $request->input('title');
        $about->text = $request->input('text');
        $about->save();
        return redirect()->route("abouts.index")->with('success', 'Biz haqimizda ma\'lumot tahrirlandi.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        $about->delete();
        return redirect()->route('abouts.index')->with('success', 'Biz haqimizda ma\'lumot o\'chirildi.');
    }
}
