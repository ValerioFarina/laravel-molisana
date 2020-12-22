@extends('layouts.app')

@section('page-title', 'Prodotti')

@section('content')
    <div class="container">
        <div id="pasta-types">
            @foreach ($pasta_types as $pasta_type)
                <div class="pasta-type">
                    <img src="{{ $pasta_type["src"] }}" alt="{{ $pasta_type["titolo"] }}">
                </div>
            @endforeach
        </div>
    </div>
@endsection
