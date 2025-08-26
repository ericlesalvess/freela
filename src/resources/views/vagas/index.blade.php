@section('title', 'vagas')

@section('content_header')
@stop

@section('plugins.Datatables', true)

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista de vagas</h3>
        </div>

        <div class="card-body">
            <div>
                <a href="{{ route('vaga.create') }}" type="button" class="btn btn-primary" style="width:80px;">Novo</a>
            </div>
            <br>
            <table class="table table-bordered table-striped dataTable dtr-inline" id="vaga-table" style="font-size: 15px;">
                <thead>
                    <tr>
                        <th style="width: 5%">Id</th>
                        <th style="width: 12%">Vaga</th>
                        <th style="width: 7%">Descrição</th>
                        <th style="width: 5%">Valor</th>
                        <th style="width: 10%">Periodo</th>
                        <th style="width: 5%">Endereço</th>
                        <th style="width: 5%">Horário</th>
                        <th style="width: 1%">Beneficios</th>
                        <th style="width: 5%">Status</th>
                        <th style="width: 7%">Ações</th> </tr>
                </thead>
            </table>
        </div>

    </div>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap4.min.css">
@stop

@section('js')

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {

            $('#vaga-table').DataTable({
                 // Desabilita a pesquisa, paginação e informações
                searching: false,
                lengthChange: false,
                paging: false,
                info: false,
                
                language: {
                    "url": "{{ asset('js/pt-br.json') }}"
                },
                processing: true,
                serverSide: true,
                ajax: "{{ route('vaga.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'titulo_vaga',
                        name: 'titulo_vaga'
                    },
                    {
                        data: 'descricao_vaga',
                        name: 'descricao_vaga'
                    },
                    {
                        data: 'valor_freelancer',
                        name: 'valor_freelancer'
                    },
                    {
                        data: 'periodo_pagamento',
                        name: 'periodo_pagamento'
                    },
                    {
                        data: 'endereco',
                        name: 'endereco'
                    },
                    {
                        data: 'horario_trabalho',
                        name: 'horario_trabalho'
                    },
                    {
                        data: 'beneficios',
                        name: 'beneficios'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    

                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ]
            });
        });
    </script>
@stop
