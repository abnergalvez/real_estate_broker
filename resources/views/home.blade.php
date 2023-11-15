@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
            <x-home_agents :agents="$agents" />
            <br>
            <x-home_sellers :sellers="$sellers" />
            <br>
            <x-home_visits :visits="$visits" />
    </div>
</div>
@endsection
