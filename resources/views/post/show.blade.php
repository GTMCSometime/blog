@extends('layouts.main')
@section('content')
<main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">{{ $post->title }}</h1>
            <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200"> {{ $data->translatedFormat('F') }} • {{ $data->day }}, {{ $data->year }}• {{ $data->format('H:i') }} • {{ $postCount}}</p>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="{{ asset('storage/' . $post->main_image) }}" class="img-thumbnail" alt="featured image" class="w-100" >
            </section>
            <section class="post-content">
                <div class="row">
                    <div class="col-lg-9 mx-auto">
                     {!! $post->content !!} 
                    </div>
                </div>
            </section>
            @auth
                 <div class="d-flex justify-content-between">
                    <section class="py-3">
                        <form action="{{ route('post.like.store', $post->id) }}" method="post">
                            @csrf
                            <span style="font-size: 2em;">{{ $post->liked_user_count }}</span>
                            <button type="submit" class="border-0 bg-transparent">
                                @if (auth()->user()->likedPosts->contains($post->id))
                                <i class="fas fa-heart" style="font-size: 2em;"></i>
                                @else
                                <i class="far fa-heart" style="font-size: 2em;"></i>
                                @endif
                            </button>
                        </form>
                        </section>
                        </div>
                        @endauth
                        @guest
                        <div>
                        <span style="font-size: 2em;">{{ $post->liked_user_count }}</span> 
                        <i class="far fa-heart" style="font-size: 2em;"></i>
                        </div>
                        @endguest
            @if ($relatedPosts->count() !== 0)
            
                    <section class="related-posts">
                        <h2 class="section-title mb-4" data-aos="fade-up">Похожие посты</h2>
                        @foreach ($relatedPosts as $relatedPost)
                        <div class="row">
                            <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                            <a href="{{ route('post.show', $relatedPost->id) }}">
                                    <img src="{{ asset('storage/' . $relatedPost->preview_image) }}" class="img-thumbnail" alt="related post" class="post-thumbnail">
                                    </a>
                                <div class="d-flex justify-content-between">
                                <p class="post-category">{{ $relatedPost->category->title }}</p>
                                @auth
                        <form action="{{ route('post.like.store', $relatedPost->id) }}" method="post">
                            @csrf
                            <span>{{ $relatedPost->liked_user_count }}</span>
                            <button type="submit" class="border-0 bg-transparent">
                                @if (auth()->user()->likedPosts->contains($relatedPost->id))
                                <i class="fas fa-heart"></i>
                                @else
                                <i class="far fa-heart"></i>
                                @endif
                            </button>
                        </form>
                        @endauth
                                </div>
                                <a href="{{ route('post.show', $relatedPost->id) }}"><h5 class="post-title">{{ $relatedPost->title }}</h5></a>
                            </div>
                            </div>
                        @endforeach
                    </section>

                    @endif
                        <div class="row">
                    <section class="comment-list mb-5">
                        <h2 class="section-title mb-5" data-aos="fade-up">{{ $postCount }}</h2>
                        @foreach ($post->comments as $comment)
                        <div class="comment-text mb-3">
                    <span class="username">
                      <div>
                      <b>{{ $comment->user->name }}</b>
                      </div>
                      <span class="text-muted float-right">{{ $comment->DateAsCarbon->diffForHumans() }}</span>
                    </span><!-- /.username -->
                    {{ $comment->message }}
                  </div>
                        @endforeach
                    </section>
                    </div>
                    <div class="row">
                    <section class="comment-section">
                        <h2 class="section-title mb-5" data-aos="fade-up">Отправить комментарий</h2>
                        <form action="{{ route('post.comment.store', $post->id) }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="form-group col-12" data-aos="fade-up">
                                <label for="message" class="sr-only">Комментарий</label>
                                <textarea name="message" id="message" class="form-control" placeholder="Комментарий" rows="10"></textarea>
                                </div>
                            </div>
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <div class="row">
                                <div class="col-12" data-aos="fade-up">
                                    <input type="submit" value="Оставить комментарий" class="btn btn-warning">
                                </div>
                            </div>
                        </form>
                    </section>
                    </div>
                </div>
    </main>
    @endsection('content')