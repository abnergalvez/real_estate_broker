<div class="col-md-12 mb-2">
    <div class="card">
        <div class="card-header bg-dark text-white">Clientes Vendedores & Propiedades</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Nombre</th>
                            <th>Rut</th>
                            <th>Propiedades</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($sellers as $seller)
                        <tr>
                            <td>{{ $seller->id }}</td>
                            <td>{{ $seller->name }}</td>
                            <td>{{ $seller->rut }}</td>
                            <td>
                                <ul>
                                @forelse($seller->properties as $property)
                                <li>
                                    {{ $property->name }} | {{ $property->total_area }} M<sup>2</sup> | ${{ $property->price }}
                                </li>
                                @empty
                                -
                                @endforelse
                                </ul>
                            </td>
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