<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;

class CardsController extends Controller
{
    public function index() {
        $card =  Card::all();

        return response()->json($card, 200);
    }

    public function store(Request $request)
    {
        $card = $request->all();

        Card::create($card);

        return response()->json(["res" => true, "message" => "Tarjeta registrada correctamente"], 200);
    }

    public function update (Request $request, $id) {
        $card = Card::findOrFail($id);
        $input = $request->all();
        $card->update($input);

        return $card;
    }

    public function updateInventario (Request $request, $id) {
        $card = Card::findOrFail($id);
        $input = $request->all();
        $card->update($input);

        return response()->json(["res" => true, "message" => "Inventario actualizado correctamente"], 200);
    }

    public function show($id) {
        $card = Card::find($id);

        return response()->json($card, 200);
    }
}
