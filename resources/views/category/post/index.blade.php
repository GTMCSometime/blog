@extends('layouts.main')
@section('content')
<main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">{{ $category->title }}</h1>
            <section class="featured-posts-section">
                <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-4 fetured-post blog-post" data-aos="fade-up">
                        <div class="blog-post-thumbnail-wrapper">
                        <a href="{{ route('post.show', $post->id) }}">
                        <img src="{{ asset('storage/' . $post->preview_image) }}" alt="blog post">
                        </a>
                        </div>
                        <div class="d-flex justify-content-between">
                        <p class="blog-post-category">{{ $post->category->title }}</p>
                        @auth
                        <form action="{{ route('post.like.store', $post->id) }}" method="post">
                            @csrf
                            <span>{{ $post->liked_user_count }}</span>
                            <button type="submit" class="border-0 bg-transparent">
                                <i class="fa{{ auth()->user()->likedPosts->contains($post->id) ? 's' :'r' }} fa-heart"></i>
                            </button>
                        </form>
                        @endauth
                        @guest
                        <form action="{{ route('post.like.store', $post->id) }}" method="post">
                            @csrf
                            <span>{{ $post->liked_user_count }}</span>
                            <button type="submit" class="border-0 bg-transparent">
                                <i class="far fa-heart"></i>
                            </button>
                        </form>
                        @endguest
                        </div>
                        <div class="d-flex justify-content-between">
                        <a href="{{ route('post.show', $post->id) }}" class="blog-post-permalink">
                            <h6 class="blog-post-title">{{ $post->title }}</h6>
                        </a>
                        @auth
                        <span>{{ $post->comments->count()}}
                        <i class="fa{{ $post->comments->contains('user_id', auth()->user()->id) ? 's' : 'r'}} fa-comment mr-1"></i>
                        </span>
                        @endauth
                        @guest
                        <span>{{ $post->comments->count()}}
                        <i class="far fa-comment mr-1"></i>
                        </span>
                        @endguest
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
        </div>

    </main>
    @endsection('content')