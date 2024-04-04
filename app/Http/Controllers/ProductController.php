<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Va a la vista de gestion_productos
        //Para mostrar todos los datos
        $products = Product::all();
        return view('gestion_productos')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Va a la vista crear_productos
        return view('crear_productos');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Toma los datos para guardarlos en la BD
        $product = new Product();
        $product->name = $request->nombre;
        $product->description = $request->descripcion;
        $product->price = $request->precio;
        $product->save();
        return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       //No lo vamos a implementar... se muestran en el index todos los productos 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Se utiliza para consultar los datos a editar
        $product = Product::find($id);
        return view('editar_productos')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Se hace el Update en la base de datos
        $product = Producto::find($id);
        $product->name = $request->nombre;
        $product->description = $request->descripcion;
        $product->price = $request->precio;
        $product->save();
        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Para eliminar un registro de la Base de datos
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('productos.index');
    }
}
