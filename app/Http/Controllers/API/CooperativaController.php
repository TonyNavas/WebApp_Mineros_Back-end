<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Cooperativa;
use Illuminate\Http\Request;

class CooperativaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Cooperativa::all();
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
    public function show(Cooperativa $cooperativa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cooperativa $cooperativa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cooperativa $cooperativa)
    {
        //
    }
}
