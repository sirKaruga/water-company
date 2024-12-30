@extends('web_layout')

@section('page_content')
<div class="container-xxl py-5">
    <div class="row g-5">
        <div class="col-lg-8 mx-auto wow fadeInUp" data-wow-delay="0.1s">
            <div class="blog-details bg-light rounded p-5">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <h2>{{ $product->title }}</h2>
                        <p>{{ $product->description }}</p>
                        <p>Category: {{ $product->category }}</p>
                        <p>Price: {{ $product->price }} </p>
                        {{-- <button class="btn btn-primary">Request for A Quotation</button> --}}
                        <a href="https://wa.me/254746254382" class="btn btn-primary">Request for A Quotation</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
