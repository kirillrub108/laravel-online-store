@extends('layout')

@section('title', 'Интернет-магазин электроники и бытовой техники')

@section('content')
    <div class="container mt-4">
        <h1>Продукты</h1>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card card-fixed-size">
                        <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}">
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


<!-- Опционально: подключение Bootstrap JS и Popper.js для функциональности компонентов -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
