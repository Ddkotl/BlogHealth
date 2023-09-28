@extends('layouts.headerFooter')

@section('content')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Блог</h1>
            <section class="featured-posts-section">
                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-md-4 fetured-post blog-post mb-5">
                            <div class="blog-post-thumbnail-wrapper">
                                <img src="{{ 'storage/' . $post->preview_image }}" alt="blog post">
                            </div>
                            <div class="d-flex justify-content-between ">
                                <p class="blog-post-category">{{ $post->category->title }}</p>
                                @auth
                                    <form action="{{ route('post.like', $post->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="border-0 bg-transparent ">
                                            <span>{{ $post->liked_user_count }}</span>
                                            @if (auth()->user()->likedPosts->contains($post->id))
                                                <i class="ion ion-happy"></i>
                                            @else
                                                <i class="ion ion-happy-outline"></i>
                                            @endif
                                        </button>
                                    </form>
                                @endauth
                                @guest
                                <div>
                                    <span>{{ $post->liked_user_count }}</span>
                                    <i class="ion ion-happy-outline"></i>

                                </div>
                                @endguest
                            </div>
                            <a href="{{ route('single.post', $post->id) }}" class="blog-post-permalink">
                                <h6 class="blog-post-title">{{ $post->title }}</h6>
                            </a>
                        </div>
                    @endforeach

                    <div class="m-auto row ">
                        {{ $posts->links() }}
                    </div>
                </div>
            </section>
            <div class="row mt-5 col-12 ">
                <div class="col-md-8">
                    <section>
                        <div class="row blog-post-row">
                            <div class="col-12">
                                <h5 class="widget-title">Случайные статьи</h5>

                            </div>
                            @foreach ($randomPosts as $post)
                                <div class="col-md-6 blog-post" data-aos="fade-up">
                                    <div class="blog-post-thumbnail-wrapper">
                                        <img src="{{ 'storage/' . $post->preview_image }}" alt="blog post">
                                    </div>
                                    <div>
                                        <p class="blog-post-category">{{ $post->category->title }}</p>

                                    </div>
                                    <a href="{{ route('single.post', $post->id) }}" class="blog-post-permalink">
                                        <h6 class="blog-post-title">{{ $post->title }}</h6>
                                    </a>
                                </div>
                            @endforeach

                        </div>
                    </section>
                </div>
                <div class="col-md-4 sidebar" data-aos="fade-left">

                    <div class="widget widget-post-list">
                        <h5 class="widget-title">Самые популярные</h5>
                        <ul class="post-list">
                            @foreach ($likedPosts as $post)
                                <li class="post">
                                    <a href="{{ route('single.post', $post->id) }}" class="post-permalink media">
                                        <img src="{{ 'storage/' . $post->preview_image }}" alt="blog post">
                                        <div class="media-body">
                                            <h6 class="post-title">{{ $post->title }}</h6>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget">
                        <h5 class="widget-title">Categories</h5>
                        <img src="{{ asset('assets/images/blog_widget_categories.jpg') }}" alt="categories" class="w-100">
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
