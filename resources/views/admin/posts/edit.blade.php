@extends('admin.layouts.main')
@section('content_header')
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12">
            <!-- small box -->
            <h6 class="mb-3">Редактирование поста</h6>
            <form action="{{ route('admin.post.update',$post->id) }}" method="post" class="w-25">
              @csrf
              @method('patch')
  <div class="mb-3">
    <label for="title" class="form-label">Название</label>
    <input type="text" class="form-control" name="title" placeholder="Название поста"
     value="{{ $post->title}}">
    @error('title')
<div class="text-danger">Это поле необходимо заполнить</div>
  @enderror
  </div>

  <button type="submit" class="btn btn-primary" value="Добавить">Обновить</button>
</form>
            </div>
        </div>
        </div>
    </section>
@endsection
