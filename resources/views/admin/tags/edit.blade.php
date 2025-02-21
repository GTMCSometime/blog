@extends('admin.layouts.main')
@section('content_header')
<section class="content">
        <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Редактирование тега</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Домой</a></li>
              <li class="breadcrumb-item"><a href="{{ route('admin.tag.index') }}">Теги</a></li>
              <li class="breadcrumb-item active">{{ $tag->title }}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
          <div class="col-12">
            <!-- small box -->
            <form action="{{ route('admin.tag.update',$tag->id) }}" method="post" class="w-25">
              @csrf
              @method('patch')
  <div class="mb-3">
    <label for="title" class="form-label">Название</label>
    <input type="text" class="form-control" name="title" placeholder="Название тега"
     value="{{ $tag->title}}">
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
