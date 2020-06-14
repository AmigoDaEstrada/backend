<?php

namespace App\Http\Controllers;

use App\Models\Cambio;
use Illuminate\Http\Request;

class CambioController extends Controller
{

    public function showAll()
    {
        return response()->json(Cambio::all());
    }

    public function showOne($id)
    {
        return response()->json(Cambio::find($id));
    }

    public function showInbox($id)
    {
        return response()->json(Cambio::where('destination', $id)->firstOrFail());
    }

    public function create(Request $request)
    {
        $form = Cambio::create($request->all());

        return response()->json($form, 201);
    }

    public function update($id, Request $request)
    {
        $form = Cambio::findOrFail($id);
        $form->update($request->all());

        return response()->json($form, 200);
    }

    public function delete($id)
    {
        Cambio::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
