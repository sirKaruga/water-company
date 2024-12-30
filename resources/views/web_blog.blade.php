@extends('web_layout')

@section('page_content')

<!-- Blog Dashboard Section Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Blog Dashboard</h1>
            <p>Explore our latest stories, news, and insights. Click on any blog to read the full story.</p>
        </div>
        <div class="row g-4">
            @foreach($blogs as $blog)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="blog-item bg-light rounded overflow-hidden" style="height: 100%; display: flex; flex-direction: column;">
                    <div class="image-wrapper" style="width: 100%; height: 200px; overflow: hidden;">
                        <img class="img-fluid" src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="p-4" style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <h4 class="mb-3">{{ $blog->title }}</h4>
                            <p>{{ Str::limit($blog->excerpt, 100) }}</p>
                        </div>
                        <a href="{{ url('blog/'.$blog->id) }}" class="btn btn-primary py-2 px-4 mt-3">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Blog Dashboard Section End -->

@endsection
