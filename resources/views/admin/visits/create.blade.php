@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    {{ __('Crear Visita') }}
                    <a class="btn btn-secondary btn-sm float-end" href="{{ route('visits.index')}}">
                        <- Volver
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