<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSaleRequest;
use App\Http\Requests\UpdateSaleRequest;
use App\Models\Sale;
use Illuminate\Support\Facades\Auth;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->is_admin)
            return back();


        $user = Auth::user();
        $vendas = $user->sales;

        


        return view('sales.index', ['compras' => $vendas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($p_id)
    {
        if (Auth::user()->is_admin)
            return back();

        $cliente = Auth::user();

        $venda = new Sale();
        $venda->client_id = $cliente->id;
        $venda->product_id = $p_id;
        $venda->date = now();

        $venda->save();

        return redirect(route('sales.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Sale $sale) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSaleRequest $request, Sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sale $sale)
    {
        //
    }
}
