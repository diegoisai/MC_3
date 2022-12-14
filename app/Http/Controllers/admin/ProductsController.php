<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(10);
        return view('admin.lista', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required' , 'product_description' => 'required' , 'photo' => 'required|image|mimes:jpeg,png,svg|max:1024'
        ]);

        $pro = $request->all();
        if($imagen = $request->file('photo')){
            $rutaSave = 'img/';
            $imagenProducto = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaSave, $imagenProducto);
            $pro['photo'] = "$imagenProducto";
        }

        Product::create($pro);

        return redirect('/admin/lista-productos')->with('flash_message', 'Producto agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pro = Product::find($id);
        return view('products.show')->with('products', $pro);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pro = Product::find($id);
        return view('products.edit')->with('products', $pro);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pro = Product::find($id);
        $input = $request->all();
        $pro->update($input);
        return redirect('/admin/lista-productos')->with('flash_message', 'Producto ACTUALIZADO');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('/admin/lista-productos')->with('flash_message', 'Producto ELIMINADO');
    }
}
