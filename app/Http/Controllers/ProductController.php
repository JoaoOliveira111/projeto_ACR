<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Models\Category;

use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexByCategory($id)
    {
        $categorias = Category::all();
        if ($id == 0) {
            $produtos = Product::all();
        } else {
            $categoria = Category::find($id);
            $produtos = $categoria->products;
        }
        return view('products.index', ['produtos' => $produtos, 'categorias' => $categorias, 'idCategoriaAtiva' => $id]);
    }

    public function index()
    {
        return $this->indexByCategory(0);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        if (! Auth::user()->is_admin)
            return back();

        $categorias = Category::all();
        return view('products.create', ['categorias' => $categorias]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {

        $url = "";
        if ($request->has('img')) {
            $image = $request->file('img');

            $iname = "prod_" . time();
            $folder = "img/produtos/";
            $fileName = $iname . '.' . $image->getClientOriginalExtension();
            $filePath = $folder . $fileName;

            $image->storeAs($folder, $fileName, 'public');
            $url = "/Storage/" . $filePath;
        }
        $produto = new Product();

        $produto->Name = $request->name;
        $produto->Description = $request->desc;
        $produto->img = $url;
        $produto->Cost = $request->cost;
        $produto->category_id = $request->cat;
        $produto->owner_id = Auth::user()->id;

        $produto->save();

        return redirect(route('products.show', $produto->id));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $produto = Product::find($id);
        $categoria = Category::find($produto->category_id);
        return view('products.show', ['produto' => $produto, 'categoria' => $categoria]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        if (! Auth::user()->is_admin) {
            return back();
        }
        $produto = Product::find($id);
        $categorias = Category::all();
        return view('products.create', ['categorias' => $categorias, 'produto' => $produto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, $id)
    {
        $produto = Product::find($id);

        $url = $produto->img;
        if ($request->has('img')) {
            $image = $request->file('img');

            $iname = "prod_" . time();
            $folder = "/img/produtos/";
            $fileName = $iname . '.' . $image->getClientOriginalExtension();
            $filePath = $folder . $fileName;


            $image->storeAs($folder, $fileName, 'public');
            $url = "/Storage/" . $filePath;
        }

        $produto->Name = $request->name;
        $produto->Description = $request->desc;
        $produto->img = $url;
        $produto->Cost = $request->cost;
        $produto->category_id = $request->cat;
        $produto->owner_id = Auth::user()->id;

        $produto->save();

        return redirect(route('products.show', $produto->id));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        if (! Auth::user()->is_admin)
            return back();


        $produto = Product::find($id);
        $produto->delete();

        return redirect(route('products.index'));
    }
}
