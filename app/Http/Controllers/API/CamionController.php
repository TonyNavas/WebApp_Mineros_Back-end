<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Camiones;
use Illuminate\Http\Request;

class CamionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Camiones::all();
        return response()->json([
            'status' => true,
            'data' => $data,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Camiones $camiones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Camiones $camiones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Camiones $camiones)
    {
        //
    }
}
