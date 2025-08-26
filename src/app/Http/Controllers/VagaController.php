<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaga;

class VagaController extends Controller
{
    /**
     * Retorna a lista de vagas em formato JSON para o React.
     */
    public function index()
    {
        $vagas = Vaga::latest()->get(); // Pega os dados das vagas
        return response()->json($vagas); // Retorna os dados em JSON
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // ...
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // ...
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // ...
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // ...
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // ...
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // ...
    }
}