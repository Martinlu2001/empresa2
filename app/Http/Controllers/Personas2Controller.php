<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use App\Events\PersonaSaved;
use App\Models\Category;
use App\Models\Persona;
use App\Http\Requests\CreatePersonaRequest;
//use DB;

class Personas2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function _construc(){
        $this->middleware('auth')->except('index', 'show');
    }
    
    public function index()
    {
        //
        //$personas = DB::table('personas')->get();
        //$personas = Persona::get();
        //$personas = Persona::latest()->paginate(2);
    
        //return view('personas', compact('personas'));
        return view('personas', [
            'personas' => Persona::with('category')->latest()->paginate()
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create',[
            'persona' => new Persona,
            'categories' => Category::pluck('name', 'id')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePersonaREquest $request)
    {
        //Persona::create(request()->all());
        //Persona::create($request->validated());
        $persona = new Persona($request->validated());
        $persona->image = $request->file('image')->store('images');
        $persona->save();
        
        $manager = new ImageManager(new Driver());
        $image = $manager->read(Storage::get($persona->image))
            ->scale(width: 600)
            ->encode();

        Storage::put($persona->image,(string) $image);

        PersonaSaved::dispatch($persona);

        return redirect()->route('personas.index')->with('estado', 'La persona fue creado correctamente');;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //return Persona::find($id);
        /*return view('show',[
            'persona' => Persona::find($nPerCodigo)
        ]);*/
        return view('show',[
            'persona' => Persona::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Persona $persona)
    {
        //
        return view('edit',[
            'persona' => $persona,
            'categories' => Category::pluck('name', 'id')
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Persona $persona, CreatePersonaRequest $request)
    {
        //
        //$persona->update($request->validated());
        //$persona->update(array_filter($request->validated()));
        if($request->hasFile('image')){
            Storage::delete($persona->image);
            $persona->fill($request->validated());
            $persona->image = $request->file('image')->store('images');
            $persona->save();

            $manager = new ImageManager(new Driver());
            $image = $manager->read(Storage::get($persona->image))
                ->scale(width: 600)
                ->encode();

            Storage::put($persona->image,(string) $image);
            PersonaSaved::dispatch($persona);

        }else{
            $persona->update(array_filter($request->validated()));
        }
        //return redirect()->route('personas.show', $id);
        return redirect()->route('personas.show', $persona)->with('estado', 'La persona fue actualizada correctamente');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Persona $persona)
    {
        Storage::delete($persona->image);
        $persona->delete();
        //return redirect()->route('personas.index');
        return redirect()->route('personas.index')->with('estado', 'La persona fue eliminada correctamente');
    }
}
