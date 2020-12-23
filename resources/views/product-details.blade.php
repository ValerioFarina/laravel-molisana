@extends('layouts.app')

@section('page-title', 'Dettagli prodotto')

@section('content')
    <h1>
        {{ $product["titolo"] }}
    </h1>
@endsection
