@extends('layouts.app')

@section('page-title', 'Prodotti')

@section('content')
    <div class="container">
        <div id="pasta-types-container">
            @foreach ($pasta_sizes as $pasta_size)
                <div class="pasta-size">
                    <h1>
                        @switch ($pasta_size)
                            @case ('lunga')
                                le lunghe
                                @break
                            @case ('corta')
                                le corte
                                @break
                            @case ('cortissima')
                                le cortissime
                                @break
                        @endswitch
                    </h1>
                    <div class="cards-container">
                        @foreach ($pasta_types as $pasta_type)
                            @if ($pasta_type["tipo"] == $pasta_size)
                                <div class="card">
                                    <img src="{{ $pasta_type["src"] }}" alt="{{ $pasta_type["titolo"] }}">
                                    <div class="overlay">
                                        <a href="#">
                                            {{ $pasta_type["titolo"] }}
                                        </a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
