<?php

namespace App\Http\Controllers;

use App\Models\Computadora;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ComputadoraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $computadoras = Computadora::all();
        return response()->json($computadoras);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        $computadora = Computadora::create($request->all());
        return response()->json($computadora, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResponse
    {
        $computadora = Computadora::findOrFail($id);
        return response()->json($computadora);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): JsonResponse
    {
        $computadora = Computadora::findOrFail($id);

        $computadora->update($request->all());

        return response()->json($computadora);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        $computadora = Computadora::findOrFail($id);
        $computadora->delete();
        return response()->json(null, 204);
    }
}
