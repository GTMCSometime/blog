@extends('layouts.main')
@section('content')


<main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Категории</h1>
            <section class="featured-posts-section">
                <div class="row">
                <div class="col-md-4 fetured-post blog-post" data-aos="fade-up">
                <ul>
                    @foreach ($categories as $category)
                        <li>
                        <a href="{{ route('category.post.index', $category->id) }}">{{ $category->title }} ({{ $category->posts->count() }})
                        </a>
                        </li>
                    @endforeach
                    </ul>
                    </div>
                </div>
                <div class="row">
                <div class="mx-auto" style="margin-top: -100px;">
                    {{ $categories->links() }}
                </div>
                </div>
            </section>
        </div>

    </main>
    @endsection('content')