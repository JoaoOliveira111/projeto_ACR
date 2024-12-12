<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class apiController extends Controller
{
    function index()
    {
        return Product::all();
    }

    function show(int $id)
    {
        return Product::find($id);
    }

}
