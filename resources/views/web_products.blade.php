@extends('web_layout')

@section('page_content')
<div class="container-xxl py-5">
    <div class="position-relative overflow-hidden mb-4" style="background-image: url('{{ asset('img/tr1.jpeg') }}'); background-size: cover; height: 200px;">
        <h1 style="z-index: 20;" class="mb-4 text-center position-absolute top-50 start-50 translate-middle text-white">
            Our Products
        </h1>
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.6);"></div>
    </div>
    <div class="container">
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->title }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <p class="card-text">Category: {{ $product->category }}</p>
                            <a href="{{url('show_product/'.$product->id)}}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
