@extends('layouts.app')

@section('page-title', 'Dettagli prodotto')

@section('content')
    <a href="{{ prev_product_route($pasta_types, $product_id) }}" class="prev-product">
        <div class="product-image">
            <img src="{{ prev_product_img($pasta_types, $product_id) }}" alt="">
        </div>
        <div class="arrow">
            <i class="fas fa-long-arrow-alt-left"></i>
        </div>
    </a>
    <a href="{{ next_product_route($pasta_types, $product_id) }}" class="next-product">
        <div class="arrow">
            <i class="fas fa-long-arrow-alt-right"></i>
        </div>
        <div class="product-image">
            <img src="{{ next_product_img($pasta_types, $product_id) }}" alt="">
        </div>
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
