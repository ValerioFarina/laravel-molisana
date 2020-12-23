@extends('layouts.app')

@section('page-title', 'Prodotti')

@section('content')
    <div id="pasta-types-container">
        <div class="container">
            @foreach ($pasta_types as $pasta_type)
                <div class="pasta-size">
                    <h1>
                        {{ $pasta_type['title'] }}
                    </h1>
                    <div class="cards-container">
                        @foreach ($pasta_type['items'] as $index => $item)
                            <div class="card">
                                <img src="{{ $item["src"] }}" alt="{{ $item["titolo"] }}">
                                <div class="overlay">
                                    <a href="{{ route('product-details', ['id' => $index]) }}">
                                        {{ $item["titolo"] }}
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
