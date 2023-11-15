@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    {{ __('Listado Visitas') }}
                    <a class="btn btn-primary btn-sm float-end" href="{{ route('visits.create')}}">
                        Crear Visita
                    </a>

                </div>
                <div class="card-body">
                    <h4>En construccion</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection