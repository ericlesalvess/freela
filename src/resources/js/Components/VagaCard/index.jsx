import React from 'react';

// O componente agora recebe a propriedade 'vaga'
export default function VagaCard({ vaga }) {
  // Você pode usar o destructuring para acessar os dados diretamente
  // Incluindo as propriedades da empresa aninhadas em 'vaga.empresa'
  const { id, titulo_vaga, descricao_vaga, empresa } = vaga;

  // Usa uma URL de logo padrão caso a empresa ou logo_url não estejam definidos
  const logoUrl = empresa?.logo_url || 'https://placehold.co/150x150/CCCCCC/000000?text=Logo'; 
  const nomeEmpresa = empresa?.nome_empresa || 'Empresa Desconhecida';


  return (
    <article className="overflow-hidden rounded-lg shadow-sm transition hover:shadow-lg">
      {/* Imagem/Logo da Empresa */}
      <img
        alt={nomeEmpresa}
        src={logoUrl}
        className="h-56 w-full object-cover" // Ajuste o padding se a imagem não preencher todo o espaço
      />

      
        {/* Nome da Empresa e Título da Vaga */}
        <a href={`/vagas/${id}`}>
        <h3 className="mt-0.5 text-lg text-gray-900">{titulo_vaga}</h3>
        <p className="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
          Publicado por: {nomeEmpresa}
        </p>
        </a>

        {/* Descrição da Vaga */}
        <p className="mt-2 line-clamp-3 text-sm/relaxed text-gray-500 dark:text-gray-400">
          {descricao_vaga}
        </p>
         
     
    

      
    </article>
  );
}
