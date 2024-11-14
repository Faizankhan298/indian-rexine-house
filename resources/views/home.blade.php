@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1 class="text-center">Product Showcase</h1>
    <div class="row mt-5">
        @foreach($products as $product)
        <div class="col-md-4">
            <div class="card mb-4">
                <!-- Image placeholder or product image -->
                <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->title }}" style="height: 250px; height: 300px; object-fit: cover;">
                
                <!-- Card body containing title and description -->
                <div class="card-body">
                    <h5 class="card-title">{{ $product->title }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text"><strong>₹{{ $product->price }}</strong></p>
                </div>
                
                <!-- Footer   -->
                <div class="card-footer d-flex justify-content-between align-items-center">
                    <small class="text-muted">{{ $product->created_at->diffForHumans() }}</small>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
