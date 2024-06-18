<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Http\Requests\CreatePersonaRequest;
//use DB;

class Personas2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        //$personas = DB::table('personas')->get();
        //$personas = Persona::get();
        $personas = Persona::latest()->paginate(2);
    
        return view('personas', compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePersonaREquest $request)
    {
        //Persona::create(request()->all());
        Persona::create($request->validated());
        return redirect()->route('personas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Persona::find($id);
        /*return view('show',[
            'persona' => Persona::find($nPerCodigo)
        ]);*/
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
