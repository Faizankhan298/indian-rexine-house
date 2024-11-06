@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1>Product Showcase</h1>
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->title }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="card-text"><strong>${{ $product->price }}</strong></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection