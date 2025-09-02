<?php

namespace App\Http\Controllers;

use App\Models\Vaga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class VagaController extends Controller
{
    /**
     * Exibe a lista de vagas em formato JSON.
     */
    public function index()
    {
        $vagas = Vaga::latest()->get(); // Pega os dados das vagas
        return response()->json($vagas);
    }

    /**
     * Salva uma nova vaga e retorna uma resposta JSON.
     */
    public function store(Request $request)
    {
        // Validação dos dados do formulário
        $validatedData = $request->validate([
            'id_empresa' => 'required|exists:empresas,id',
            'titulo_vaga' => 'required|string|max:255',
            'descricao_vaga' => 'required|string',
            'valor_freelancer' => 'required|numeric',
            'periodo_pagamento' => 'required|in:por_hora,por_dia,por_projeto',
            'endereco' => 'required|string|max:255',
            'horario_trabalho' => 'required|string|max:255',
            'beneficios' => 'nullable|string',
            'status' => 'required|in:ativa,pausada,concluida',
        ]);

        // Cria e salva a nova vaga
        $vaga = Vaga::create($validatedData);

        // Retorna a vaga criada com uma mensagem de sucesso
        return Response::json(['message' => 'Vaga criada com sucesso!', 'vaga' => $vaga], 201);
    }

    /**
     * Atualiza uma vaga existente e retorna uma resposta JSON.
     */
    public function update(Request $request, Vaga $vaga)
    {
        // Validação dos dados do formulário
        $validatedData = $request->validate([
            'id_empresa' => 'required|exists:empresas,id',
            'titulo_vaga' => 'required|string|max:255',
            'descricao_vaga' => 'required|string',
            'valor_freelancer' => 'required|numeric',
            'periodo_pagamento' => 'required|in:por_hora,por_dia,por_projeto',
            'endereco' => 'required|string|max:255',
            'horario_trabalho' => 'required|string|max:255',
            'beneficios' => 'nullable|string',
            'status' => 'required|in:ativa,pausada,concluida',
        ]);

        // Atualiza a vaga
        $vaga->update($validatedData);

        // Retorna a vaga atualizada com uma mensagem de sucesso
        return Response::json(['message' => 'Vaga atualizada com sucesso!', 'vaga' => $vaga]);
    }

    /**
     * Remove uma vaga e retorna uma resposta JSON.
     */
    public function destroy(Vaga $vaga)
    {
        // Deleta a vaga
        $vaga->delete();

        // Retorna uma mensagem de sucesso
        return Response::json(['message' => 'Vaga removida com sucesso!'], 200);
    }
}
