<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Parking;
use Illuminate\Http\Request;

class ParkingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parkings = Parking::orderBy('name','asc')->get();
        return response()->json(['data' => $parkings],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $parking = Parking::create($request->all());
        return response()->json(['data' => $parking],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Parking $parking)
    {
        return response()->json(['data' => $parking],200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Parking $parking)
    {
        $parking->update($request->all());
        return response()->json(['data' => $product], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Parking $parking)
    {
        $parking->delete();
        return response()->json(null,204);
    }
}
