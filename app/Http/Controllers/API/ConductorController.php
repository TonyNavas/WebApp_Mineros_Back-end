<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Conductores;
use Illuminate\Http\Request;

class ConductorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Conductores::all();
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
    public function show(Conductores $conductores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Conductores $conductores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Conductores $conductores)
    {
        //
    }
}
