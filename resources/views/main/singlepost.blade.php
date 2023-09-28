@extends('layouts.headerFooter')

@section('content')
    <main class="blog-post">
        <div class="container">
            
            <h1 class="edica-page-title" >
                {{ $post->title }}
            </h1>

            <p class="edica-blog-post-meta" >Создано: {{ $data->translatedFormat('F') }}
                {{ $data->day }} . {{ $data->year }} , {{ $data->format('H:i') }} , 
                Комментариев: {{ $post->comments->count() }}</p>
                <div class="mb-3">
                    @auth
                    <form action="{{ route('post.like', $post->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="border-0 bg-transparent ">
                            <span>Количество лайков:  {{ $post->liked_user_count }}</span>
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
                    <span>Количество лайков:  {{ $post->liked_user_count }}</span>
                    <i class="ion ion-happy-outline"></i>

                </div>
                @endguest

                </div>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="{{ asset('storage/' . $post->main_image) }}" class="w-100">
            </section>
            <section class="post-content">
                <div class="row">
                    <div class="col-lg-9 mx-auto" data-aos="fade-up">
                        {!! $post->content !!}
                    </div>
                </div>
            </section>
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <section class="related-posts">
                        <h2 class="section-title mb-4" data-aos="fade-up">Похожие посты</h2>
                        <div class="row">
                            @foreach ($relatedPosts as $posts)
                            <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                                <img src="{{ asset('storage/' . $posts->preview_image) }}" alt="related post"
                                class="post-thumbnail">
                                <div>
                                    <p class="post-category">{{ $posts->category->title }}</p>

                                </div>
                                <a href="{{ route('single.post', $posts->id) }}">
                                    <h5 class="post-title">{{ $posts->title }}</h5>
                                    
                                </a>
                            </div>
                            
                            @endforeach
                        </div>
                    </section>
                    <section class="comment-list">
                        <h2 class="section-title mb-3" data-aos="fade-up">Комментарии ({{$post->comments->count()}})</h2>
                        @foreach ($post->comments as $comment)
                            <div class="col-md-12 mb-2">

                                <div class="card-footer card-comments">
                                    <div class="card-comment">
                                        <!-- User image -->

                                        <div class="comment-text">
                                            <div class="username">
                                                <strong>
                                                    {{ $comment->user->name }}

                                                </strong>
                                                <span class="text-muted float-right">{{$comment->created_at}}</span>
                                            </div><!-- /.username -->
                                            {{$comment->message}}
                                        </div>
                                        <!-- /.comment-text -->
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </section>
                    @auth
                        
                    <section class="comment-section">
                        <h2 class="section-title mb-5" data-aos="fade-up">Отправить комментарий</h2>
                        <form action="{{ route('single.post.comment', $post->id) }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="form-group col-12" data-aos="fade-up">
                                    
                                    <textarea name="message" id="comment" class="form-control" placeholder="Напишите комментарий" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12" data-aos="fade-up">
                                    <input type="submit" value="Отправить" class="btn btn-warning">
                                </div>
                            </div>
                        </form>
                    </section>
                    @endauth
                </div>
            </div>
        </div>
    </main>
@endsection
