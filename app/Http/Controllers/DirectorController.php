<?php

namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $directors = Director::all();

        return view('directors.index', compact('directors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('directors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $director = new Director();

        $director->photo = $path = $request->file('photo')->store('directors', 'public');

        $director->name = $request->name;
        $director->surname = $request->surname;
        $director->birth_date = $request->birth_date;
        $director->photo = $path;

        $director->save();

        return redirect('/directors');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $director = Director::findOrFail($id);
        $director->load('movies');

        return view('directors.show', compact('director'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $director = Director::findOrFail($id);

        return view('directors.edit', compact('director'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $director = Director::findOrFail($id);

        if ($request->hasFile('photo')) {

            $path = $request->file('photo')->store('directors', 'public');
            
            $director->photo = $path;
        }
        $director->name = $request->name;
        $director->surname = $request->surname;
        $director->birth_date = $request->birth_date;

        $director->save();

        return redirect('/directors');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $director=Director::findOrFail($id);

        $director->delete();

        return redirect('/directors');
    }
}
