@extends('layout')

@section('title', 'Категории товаров')

@section('content')
    <div class="container mt-4">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <a href="{{ route('category.products', $category->id) }}" class="stretched-link text-decoration-none nav-link">
                            @if ($category->images)
                                <img src="{{ asset($category->images) }}" class="card-img-top" alt="{{ $category->name }}">
                            @endif
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $category->name }}</h5>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
