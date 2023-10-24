<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Minero;
use Illuminate\Http\Request;

class MineroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Minero::all();
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
    public function show(Minero $minero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Minero $minero)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Minero $minero)
    {
        //
    }
}
