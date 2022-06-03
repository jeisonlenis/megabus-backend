<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Busstation;

class BusstationsController extends Controller
{
    public function index() {
        $busstation =  Busstation::all();

        return response()->json($busstation, 200);
    }

    public function show($id) {
        $busstation = Busstation::find($id);

        return response()->json($busstation, 200);
    }
}
