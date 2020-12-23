@extends('layouts.app')

@section('page-title', 'Dettagli prodotto')

@section('content')
    <div class="product-images">
        <img src="{{ $product["src-h"] }}" alt="{{ $product["titolo"] }}">
        <img src="{{ $product["src-p"] }}" alt="pacchetto pasta">
    </div>
@endsection
