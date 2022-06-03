<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;

class SellersController extends Controller
{
    public function index()
    {
        $seller = Seller::all();

        return response()->json($seller, 200);
    }

    public function show($id) {
        $seller = Seller::find($id);

        return response()->json($seller, 200);
    }
}
