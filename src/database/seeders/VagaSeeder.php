<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Empresa; // Certifique-se de importar o modelo Empresa

class VagaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pega todos os IDs das empresas existentes
        $empresaIds = Empresa::pluck('id')->toArray();

        // Verifica se existem empresas para associar as vagas
        if (empty($empresaIds)) {
            $this->command->info('Nenhuma empresa encontrada para criar vagas. Por favor, execute o EmpresaSeeder primeiro.');
            return;
        }

        // Array de vagas de exemplo
        $vagas = [
            [
                'titulo_vaga' => 'Desenvolvedor Frontend Júnior',
                'descricao_vaga' => 'Desenvolvimento de interfaces de usuário com React e Tailwind CSS.',
                'valor_freelancer' => 120.00,
                'periodo_pagamento' => 'por_hora',
                'endereco' => 'Remoto',
                'horario_trabalho' => 'Flexível',
                'beneficios' => 'Plano de saúde, vale alimentação',
                'status' => 'ativa',
            ],
            [
                'titulo_vaga' => 'UX/UI Designer Pleno',
                'descricao_vaga' => 'Criação de wireframes, protótipos e interfaces intuitivas.',
                'valor_freelancer' => 800.00,
                'periodo_pagamento' => 'por_dia',
                'endereco' => 'São Paulo, SP',
                'horario_trabalho' => '9h às 18h',
                'beneficios' => 'Vale transporte, seguro de vida',
                'status' => 'ativa',
            ],
            [
                'titulo_vaga' => 'Analista de Dados',
                'descricao_vaga' => 'Análise de grandes volumes de dados, criação de dashboards e relatórios.',
                'valor_freelancer' => 5000.00,
                'periodo_pagamento' => 'por_projeto',
                'endereco' => 'Belo Horizonte, MG',
                'horario_trabalho' => 'Comercial',
                'beneficios' => null,
                'status' => 'ativa',
            ],
            [
                'titulo_vaga' => 'Redator de Conteúdo Web',
                'descricao_vaga' => 'Criação de artigos e posts para blogs e redes sociais.',
                'valor_freelancer' => 50.00,
                'periodo_pagamento' => 'por_hora',
                'endereco' => 'Remoto',
                'horario_trabalho' => 'Flexível',
                'beneficios' => null,
                'status' => 'ativa',
            ],
            [
                'titulo_vaga' => 'Gerente de Projeto Agile',
                'descricao_vaga' => 'Liderança de equipes, planejamento e execução de projetos usando metodologias ágeis.',
                'valor_freelancer' => 1200.00,
                'periodo_pagamento' => 'por_dia',
                'endereco' => 'Rio de Janeiro, RJ',
                'horario_trabalho' => '9h às 17h',
                'beneficios' => 'Bônus por desempenho',
                'status' => 'ativa',
            ],
            [
                'titulo_vaga' => 'Especialista em SEO',
                'descricao_vaga' => 'Otimização de sites para motores de busca e análise de tráfego orgânico.',
                'valor_freelancer' => 4000.00,
                'periodo_pagamento' => 'por_projeto',
                'endereco' => 'Remoto',
                'horario_trabalho' => 'Flexível',
                'beneficios' => 'Cursos e certificações',
                'status' => 'ativa',
            ],
        ];

        foreach ($vagas as $vagaData) {
            DB::table('vagas')->insert(array_merge($vagaData, [
                'id_empresa' => $empresaIds[array_rand($empresaIds)], // Atribui um ID de empresa aleatório
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }
    }
}
