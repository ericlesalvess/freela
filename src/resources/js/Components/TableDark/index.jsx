import React from 'react';

// O componente recebe 'items' como uma prop.
// Você pode usar o destructuring para acessar a prop diretamente.
export default function TableDark({ items }) {
    // Certifique-se de que 'items' é um array antes de tentar fazer um .map()
    const vagas = Array.isArray(items) ? items : [];

    return (
        <div className="overflow-x-auto">
            <table className="min-w-full divide-y-2 divide-gray-200 dark:divide-gray-700">
                <thead className="ltr:text-left rtl:text-right">
                    <tr className="*:font-medium *:text-gray-900 dark:*:text-white">
                        <th className="px-3 py-2 whitespace-nowrap">Id</th>
                        <th className="px-3 py-2 whitespace-nowrap">Vaga</th>
                        <th className="px-3 py-2 whitespace-nowrap">Descrição</th>
                        <th className="px-3 py-2 whitespace-nowrap">Valor</th>
                        <th className="px-3 py-2 whitespace-nowrap">Periodo</th>
                        <th className="px-3 py-2 whitespace-nowrap">Endereço</th>
                        <th className="px-3 py-2 whitespace-nowrap">Horário</th>
                        <th className="px-3 py-2 whitespace-nowrap">Beneficios</th>
                        <th className="px-3 py-2 whitespace-nowrap">Status</th>
                        <th className="px-3 py-2 whitespace-nowrap">Ações</th>
                    </tr>
                </thead>

                <tbody
                    className="divide-y divide-gray-200 *:even:bg-gray-50 dark:divide-gray-700 dark:*:even:bg-gray-800"
                >
                    {/* Use .map() para iterar sobre a lista de vagas e criar uma linha para cada uma */}
                    {vagas.map(vaga => (
                        <tr key={vaga.id} className="*:text-gray-900 *:first:font-medium dark:*:text-white">
                            <td className="px-3 py-2 whitespace-nowrap">{vaga.id}</td>
                            <td className="px-3 py-2 whitespace-nowrap">{vaga.titulo_vaga}</td>
                            <td className="px-3 py-2 whitespace-nowrap">{vaga.descricao_vaga}</td>
                            <td className="px-3 py-2 whitespace-nowrap">{vaga.valor_freelancer}</td>
                            <td className="px-3 py-2 whitespace-nowrap">{vaga.periodo_pagamento}</td>
                            <td className="px-3 py-2 whitespace-nowrap">{vaga.endereco}</td>
                            <td className="px-3 py-2 whitespace-nowrap">{vaga.horario_trabalho}</td>
                            <td className="px-3 py-2 whitespace-nowrap">{vaga.beneficios}</td>
                            <td className="px-3 py-2 whitespace-nowrap">{vaga.status}</td>
                            <td className="px-3 py-2 whitespace-nowrap">
                                <a href={`/vagas/${vaga.id}`} className="edit btn btn-primary btn-sm">View</a>
                                <a href={`/vagas/${vaga.id}/edit`} className="edit btn btn-info btn-sm">Edit</a>
                                <a href={`/vagas/${vaga.id}`} className="delete btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    ))}
                </tbody>
            </table>
        </div>
    );
}