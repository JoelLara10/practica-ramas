<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use RealRashid\SweetAlert\Facades\Alert;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|max:255',
            'precio' => 'required|numeric',
            'descripcion' => 'required|string',
            'stock' => 'required|integer|min:0',
        ]);

        $producto = new Producto();
        $producto->name = $validated['nombre'];
        $producto->price = $validated['precio'];
        $producto->description = $validated['descripcion'];
        $producto->stock = $validated['stock'];
        $producto->save();

        Alert::success('Éxito', 'Producto creado correctamente')->flash();
        return redirect()->route('prod.list');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $producto = Producto::find($id);
        return view('productos.update', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $producto = Producto::find($request->id);
        $producto->name = $request->nombre;
        $producto->price = $request->precio;
        $producto->description = $request->descripcion;
        $producto->stock = $request->stock;
        $producto->save();

        return redirect()->route('prod.list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->delete();
        return redirect()->route('prod.list');
    }

    public function list()
    {
        $productos = Producto::paginate(5);
        return view('productos.index', compact('productos'));
    }
}
