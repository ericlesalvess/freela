<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Importa a classe DB para interagir com o banco de dados
use Illuminate\Support\Str; // Importa a classe Str para gerar strings aleatórias (opcional, para e-mails)

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insere 5 empresas de exemplo na tabela 'empresas'
        DB::table('empresas')->insert([
            [
                'nome_empresa' => 'Tech Solutions Ltda.',
                'email_contato' => 'contato@techsolutions.com',
                'telefone_whatsapp' => '5511987654321',
                'logo_url' => 'https://placehold.co/150x150/000000/FFFFFF?text=Tech', // Exemplo de URL de logo
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome_empresa' => 'Inovação Digital S.A.',
                'email_contato' => 'suporte@inovacaodigital.com',
                'telefone_whatsapp' => '5521912345678',
                'logo_url' => 'https://placehold.co/150x150/FF0000/FFFFFF?text=Inova',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome_empresa' => 'Serviços Gerais BR',
                'email_contato' => 'comercial@servicosbr.com',
                'telefone_whatsapp' => '5531998765432',
                'logo_url' => null, // Exemplo de logo nula
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome_empresa' => 'Construções Ágeis',
                'email_contato' => 'vendas@construcoesageis.com',
                'telefone_whatsapp' => '5541911223344',
                'logo_url' => 'https://placehold.co/150x150/00FF00/000000?text=Constru',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome_empresa' => 'Marketing Criativo',
                'email_contato' => 'info@marketingcriativo.com',
                'telefone_whatsapp' => '5551977889900',
                'logo_url' => 'https://placehold.co/150x150/0000FF/FFFFFF?text=MKT',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
