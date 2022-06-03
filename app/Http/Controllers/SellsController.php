<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sell;

class SellsController extends Controller
{
    public function index()
    {
        $sell = Sell::join('sellers', 'sells.vendedor_id', '=', 'sellers.id')
            ->join('busstations', 'sells.busstation_id', '=', 'busstations.id')
            ->join('cards', 'sells.card_id', '=', 'cards.id')
            ->select(
            'sells.*',
            'busstations.nombre as stationname',
            'cards.nombre as cardname',
            'sellers.nombres',
            'sellers.apellidos',
            'sellers.numero_id'
        )->get();

        return response()->json($sell, 200);
    }

    public function show($id)
    {
        $sell = Sell::join('sellers', 'sells.vendedor_id', '=', 'sellers.id')->find($id);

        return response()->json($sell, 200);
    }

    public function store(Request $request)
    {
        $sell = $request->all();

        Sell::create($sell);

        return response()->json(["res" => true, "message" => "Venta registrada correctamente"], 200);
    }

    public function update(Request $request, $id)
    {
        $sell = Sell::findOrFail($id);
        $input = $request->all();
        $sell->update($input);

        return response()->json(["res" => true, "message" => "Venta actualizada correctamente"], 200);
    }

    public function destroy($id)
    {
        Sell::destroy($id);

        return response()->json(["res" => true, "message" => "Venta eliminada correctamente"], 200);
    }
}
