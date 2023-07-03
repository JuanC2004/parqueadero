<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Parkingslot;
use Illuminate\Http\Request;

class ParkingslotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parkingslots = Parkingslots::orderBy('status','asc');
        return response()->json(['data' => $parkingslots],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $parkingslot = Parkingslot::create($request->all());
        return response()->json(['data' => $product],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Parkingslot $parkingslot)
    {
        return  response()->json(['data' => $parkingslot],200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Parkingslot $parkingslot)
    {
        $parkingslot->update($request->all());
        return response()->json(['data' => $parkingslot],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Parkingslot $parkingslot)
    {
        $parkingslot->delete();
        return response(null,204);
    }
}
