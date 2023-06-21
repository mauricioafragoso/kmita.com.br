<?php

namespace App\Http\Controllers;

use App\Models\Expertise;
use Illuminate\Http\Request;

class ExpertiseController extends Controller
{

    public function index()
    {

        $expertises = Expertise::query()->orderBy('name')->get();
        return view('expertise.index', ['expertises' => $expertises]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('expertise.create');
    }


    public function store(Request $request)
    {

        $name = $request->input('name');
        $description = $request->input('description');

        $expertise = new Expertise();
        $expertise->name = $name;
        $expertise->description = $description;
        $expertise->save();

        return redirect('/expertise');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
