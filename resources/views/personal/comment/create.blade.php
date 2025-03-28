@extends('personal.layouts.main')
@section('content')
<section class="content">
<div class="container-fluid">
        <div class="row">
          <div class="col-12">
          <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ответ пользователю "{{ $userName }}"</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('personal.main.index') }}">Домой</a></li>
              <li class="breadcrumb-item"><a href="{{ route('post.show', $comment->post_id) }}">К посту</a></li>
              <li class="breadcrumb-item active">Ответ на комментарий</li>
            </ol>
          </div>
          <div class="col-sm-6">
          <p>На комментарий:
            "{{ $comment->message }}"</p>
          </div>
        </div>
        <div class="row">
                    <section class="comment-section">
                        <form action="{{ route('personal.comment.store', $comment->post_id) }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="form-group col-12" data-aos="fade-up">
                                <label for="message" class="sr-only">Комментарий</label>
                                <textarea name="message" id="message" class="form-control" placeholder="Комментарий" rows="10"></textarea>
                                </div>
                            </div>
                            <input type="hidden" name="post_id" value="{{ $comment->post_id }}">
                            <input type="hidden" name="parent_id" value="{{ $comment->user_id }}">
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                            <div class="row">
                                <div class="col-12" data-aos="fade-up">
                                    <input type="submit" value="Оставить комментарий" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </section>
                    </div>
            </div>
        </div>
        </div>
            </div>
        </div>
        </div>
    </section>
@endsection
