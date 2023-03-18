<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Department;
use App\Models\Municipality;

class DepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        $countries =Country::all();

        $departments = Department::when($request->country,function($q) use($request){
            $q->where('countries_id',$request->country);
        })->when($request->q,function($q) use($request){
            $q->where('name','like','%'.$request->q.'%');
        })->get();
        return view('departments.index', compact('departments','countries'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = Department::all();
        $countries = Country::all();
        return view('departments.create', compact('departments','countries'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $departments = Department::create([
            'name' => $request->name,
            'countries_id' => $request->countries_id,

        ]);
        return redirect()->route('departments.index')->with('success', 'El departamento Se ha creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show (string $id)
    {
        $departments= Department::find($id);
        $municipalities = Municipality::where('departments_id',$id)->get();
        return view('departments.show',compact( 'departments','municipalities'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $countries = Country::find($id);
        $countries = Country::all();
        $departments= Department::find($id);

        return view('departments.edit', compact('departments','countries'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, string $id)
    {
        $departments = Department::find($id)->update($request->all());
        return redirect()->route('departments.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $departments = Department::find($id)->delete();
        return redirect()->route('departments.index');
    }
}
