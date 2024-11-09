    @extends('layouts.app')

    @section('title', 'Products')

    @section('content')
        <h1 class="text-center">Owner Panel</h1>
          <div class="d-flex justify-content-center mb-3 mt-3">
        <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>
    </div>
        
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->title }}" style="height: 250px; height: 300px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->title }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <p class="card-text"><strong>₹{{ $product->price }}</strong></p>
                            <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">Update</a>
                            <form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endsection