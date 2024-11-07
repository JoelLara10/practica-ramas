<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener todos los usuarios
        $users = Usuario::all();

        // Retornar la vista con la lista de usuarios
        return view('vistas.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Retornar la vista de creación
        return view('vistas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        // Validar los datos
        $validated = $request ->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email', 
            'password' => 'required|string|min:8', 
        ]);

        // Crear un nuevo usuario

        $usuario = new Usuario();
        $usuario->name = $request->input('name');
        $usuario->email = $request->input('email');
        $usuario->password = Hash::make($request->input('password'));
        $usuario->save();

        Alert::success('Éxito', 'Usuario creado correctamente')->flash();
        return redirect()->route('user.list');
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        // Retornar la vista con el usuario específico
        return view('show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //dd($id);
        $usuario = Usuario::find($id);
        //dd($usuario);
        return view('vistas.update', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //dd($request->all());
        $usuario = Usuario::find($request->id);
        $usuario->name = $request->nombre;
        $usuario->save();

        return redirect()->route('user.list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //dd($id);
        $usuario = Usuario::find($id);
        $usuario->delete();
        return redirect()->route('user.list');
    }

    public function list() {
        $usuarios = Usuario::paginate(4);
        //dd($usuarios);
        return view('vistas.list_users', compact('usuarios'));
    }

    // Métodos adicionales
    public function Function1()
    {
        // Aquí puedes agregar lógica personalizada
    }

    public function Function2()
    {
        // Aquí puedes agregar lógica personalizada
    }

    public function Function3()
    {
        // Aquí puedes agregar lógica personalizada
    }
}
