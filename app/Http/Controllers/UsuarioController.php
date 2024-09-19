<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use Illuminate\Support\Facades\Log;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Matar el proceso
        //$a = "Llegas a la funcion";
        //Log::info("Llegas a la funcion");
        //Log::emergency($a);
        //Log::alert($a);
        //Log::critical($a);
        //Log::error($a);
        //Log::warning($a);
        //Log::notice($a);
        //Log::info($a);
        //Log::debug($a);
        //Log::info($a);
        $user = Usuario::all();
        //dd($user);
        //$a = Usuario::find(1);
        return view('index', compact('user'));
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
    public function store(/*StoreUsuarioRequest $request*/)
    {
        return view('store');
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        return view('show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        return view('edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(/**UpdateUsuarioRequest $request, Usuario $usuario*/)
    {
        return view('update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        return view('destroy');
    }
    public function Function1()
    {
        //
    }
    public function Function2()
    {
        //
    }
    public function Function3()
    {
        //
    }
}
