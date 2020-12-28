@extends('layouts.app')

@section('page-title', 'Dettagli prodotto')

@section('content')
    <a href="#" class="arrow left">
        <i class="fas fa-long-arrow-alt-left"></i>
    </a>
    <a href="#" class="arrow right">
        <i class="fas fa-long-arrow-alt-right"></i>
    </a>
    <div class="product-info">
        <div class="container">
            <h1>
                {{ $product["titolo"] }}
            </h1>
        </div>

        <div class="product-images">
            <img src="{{ $product["src-h"] }}" alt="{{ $product["titolo"] }}">
            <img src="{{ $product["src-p"] }}" alt="pacchetto pasta">
        </div>

        <div class="container">
            <p>
                {!! $product["descrizione"] !!}
            </p>
        </div>
    </div>
@endsection
