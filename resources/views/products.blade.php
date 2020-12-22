@extends('layouts.app')

@section('page-title', 'Prodotti')

@section('content')
    <div class="container">
        <div id="pasta-types-container">
            @foreach ($pasta_sizes as $pasta_size)
                <div class="pasta-size">
                    <h2>
                        {{ $pasta_size }}
                    </h2>
                    <div class="cards-container">
                        @foreach ($pasta_types as $pasta_type)
                            @if ($pasta_type["tipo"] == $pasta_size)
                                <div class="card">
                                    <img src="{{ $pasta_type["src"] }}" alt="{{ $pasta_type["titolo"] }}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
