<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Municipality;

class MunicipalitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $municipalities = Municipality::all();
        return  view('municipalities.index', compact('municipalities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments= Department::all();
        $municipalities = Municipality::all();
        return view('municipalities.create', compact('municipalities','departments'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $municipality=Municipality::create([
            'id' => $request->id,
            'name' => $request->name,
            'departments_id' => $request->departments_id,
            ]);
        return redirect()->route('municipalities.index')->with('success', 'El municipio Se ha creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    //{

    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $departments= Department::all();
        $department= Department::find($id);
        $municipality = Municipality::find($id);
        return view('municipalities.edit', compact('municipality','departments','department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $municipality = Municipality::find($id)->update($request->all());
        return redirect()->route('municipalities.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $municipality = Municipality::find($id)->delete();
        return redirect()->route('municipalities.index');
    }
}
