<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\kurss;
class KurssController extends Controller
{
    public function index()
    {
        return response()->json(Kurss::all());
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nosaukums' => 'required|string',
            'Paskaidrojušais_teksts' => 'required|string',
            'Banera_adrese' => 'required|string',
            'Cilvēku_skaits' => 'required|integer',
        ]);

        $kurss = Kurss::create($validatedData);

        return response()->json($kurss, 201);
    }
}

