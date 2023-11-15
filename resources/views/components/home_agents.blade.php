<div class="col-md-12  mb-2">
    <div class="card">
        <div class="card-header bg-dark text-white">Agentes Corredores</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Nombre</th>
                            <th>Rut</th>
                            <th>email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($agents as $agent)
                        <tr>
                            <td>{{ $agent->id }}</td>
                            <td>{{ $agent->name }}</td>
                            <td>{{ $agent->rut }}</td>
                            <td>{{ $agent->email }}</td>
                        </tr>
                        @empty
                            No hay registros
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>