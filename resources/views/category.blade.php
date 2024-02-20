@extends('layout')

@section('title', substr("{{ $category->name }}", 13, -5))

@section('content')
    <div class="container mt-4">
        <h1>{{ $category->name }}</h1> {{-- Название категории --}}
        <div class="row">
            @foreach ($category->products as $product) {{-- Перебор всех продуктов в категории --}}
            <div class="col-md-4 mb-4">
                <div class="card card-fixed-size">
                    <img src="{{ asset($product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <a href="#" class="btn btn-primary  mt-auto">Купить за {{ $product->price }}₽</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
