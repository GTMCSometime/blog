@extends('layouts.main')
@section('content')


<main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Блог</h1>
            <section class="featured-posts-section">
                <div class="row">
                    @foreach ($posts as $post)
                    <div class="col-md-4 fetured-post blog-post" data-aos="fade-up">
                        <div class="blog-post-thumbnail-wrapper">
                        <a href="{{ route('post.show', $post->id) }}">
                        <img src="{{ 'storage/' . $post->preview_image }}" alt="blog post">
                        </a>
                        </div>
                        <div class="d-flex justify-content-between">
                        <p class="blog-post-category">{{ $post->category->title }}</p>
                        @auth
                        <form action="{{ route('post.like.store', $post->id) }}" method="post">
                            @csrf
                            <span>{{ $post->liked_user_count }}</span>
                            <button type="submit" class="border-0 bg-transparent">
                                @if (auth()->user()->likedPosts->contains($post->id))
                                <i class="fas fa-heart"></i>
                                @else
                                <i class="far fa-heart"></i>
                                @endif
                            </button>
                        </form>
                        @endauth
                        </div>
                        <div class="d-flex justify-content-between">
                        <a href="{{ route('post.show', $post->id) }}" class="blog-post-permalink">
                            <h6 class="blog-post-title">{{ $post->title }}</h6>
                        </a>
                        <span>{{ $post->comments->count()}}
                        <i class="fa{{ $post->comments->count() > 0 ? 's' : 'r'}} fa-comment mr-1"></i></span>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                <div class="mx-auto" style="margin-top: -100px;">
                    {{ $posts->links() }}
                </div>
                </div>
            </section>
            <div class="row">
                <div class="col-md-8">
                    <section>
                        <div class="row blog-post-row">
                            @foreach ($randomPosts as $randomPost)
                            <div class="col-md-6 blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                <a href="{{ route('post.show', $randomPost->id) }}">
                                    <img src="{{ 'storage/' . $randomPost->preview_image }}" alt="blog post">
                                    </a>
                                </div>
                                <div class="d-flex justify-content-between">
                                <p class="blog-post-category">{{ $randomPost->category->title }}</p>
                                @auth
                        <form action="{{ route('post.like.store', $randomPost->id) }}" method="post">
                            @csrf
                            <span>{{ $randomPost->liked_user_count }}</span>
                            <button type="submit" class="border-0 bg-transparent">
                                @if (auth()->user()->likedPosts->contains($randomPost->id))
                                <i class="fas fa-heart"></i>
                                @else
                                <i class="far fa-heart"></i>
                                @endif
                            </button>
                        </form>
                        @endauth
                        </div>
                        <div class="d-flex justify-content-between">
                        <a href="{{ route('post.show', $randomPost->id) }}" class="blog-post-permalink">
                            <h6 class="blog-post-title">{{ $randomPost->title }}</h6>
                        </a>
                        <span>{{ $randomPost->comments->count()}}
                        <i class="fa{{ $randomPost->comments->count() > 0 ? 's' : 'r'}} fa-comment mr-1"></i></span>
                        </div>
                            </div>
                            @endforeach
                        </div>
                    </section>
                </div>
                <div class="col-md-4 sidebar" data-aos="fade-left">
                    <div class="widget widget-post-list">
                        <h5 class="widget-title">Популярные посты</h5>
                        @foreach ($likedPosts as $likedPost)
                        <ul class="post-list">
                            <li class="post">
                                <a href="{{ route('post.show', $post->id) }}" class="post-permalink media">
                                    <img src="{{ 'storage/' . $likedPost->preview_image }}" alt="blog post">
                                    <div class="media-body">
                                        <h6 class="post-title">{{ $likedPost->title }}</h6>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </main>
    @endsection('content')