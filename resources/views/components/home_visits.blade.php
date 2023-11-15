<div class="col-md-12  mb-2">
    <div class="card">
        <div class="card-header bg-dark text-white">Visitas a Propiedades</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Estado</th>
                            <th>Comprador/Interesado</th>
                            <th>Propiedad</th>
                            <th>Agente</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($visits as $visit)
                        <tr>
                            <td>{{ $visit->date }}</td>
                            <td>{{ $visit->status }}</td>
                            <td>
                                {{ $visit->buyer->name }} 
                                <br><small>{{ $visit->buyer->email }}</small>
                            </td>
                            <td>
                                {{ $visit->property->name }} 
                                <br><small>Dir: {{ $visit->property->address }}</small>
                            </td>
                            <td> {{ $visit->property->agent->name }}</td>
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