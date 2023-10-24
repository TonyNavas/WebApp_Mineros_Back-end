<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Procedencia;
use Illuminate\Http\Request;

class ProcedenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Procedencia::all();
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
    public function show(Procedencia $procedencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Procedencia $procedencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Procedencia $procedencia)
    {
        //
    }
}
