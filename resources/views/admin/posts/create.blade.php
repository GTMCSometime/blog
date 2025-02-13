@extends('admin.layouts.main')
@section('content_header')
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12">
            <!-- small box -->
            <h6 class="mb-3">Добавление поста</h6>
            <form action="{{ route('admin.post.store' )}}" method="post" enctype="multipart/form-data">
              @csrf
  <div class="mb-3 form-group w-25">
    <label for="title" class="form-label">Название</label>
    <input type="text" class="form-control" name="title" placeholder="Название поста"
    value="{{ old('title') }}">
    @error('title')
<div class="text-danger">Это поле необходимо заполнить</div>
  @enderror
  </div>
  <div class="form-group">
  <textarea id="summernote" name="content"> {{ old('content' )}} </textarea>
  @error('content')
<div class="text-danger">Это поле необходимо заполнить</div>
  @enderror
  </div>
  <div class="w-25">
  <div class="mb-3">
  <label for="formFile" class="form-label">Добавить главное изображение</label>
  <input class="form-control" type="file" name="main_image" value="{{ old('main_image') }}">
  @error('main_image')
<div class="text-danger">Необходимо добавить файл</div>
  @enderror
  </div>
<div class="mb-3">
  <label for="formFile" class="form-label">Добавить превью</label>
  <input class="form-control" type="file" name="preview_image" value="{{ old('preview_image') }}">
  @error('preview_image')
<div class="text-danger">Необходимо добавить файл</div>
  @enderror
</div>
</div>
  <div class="form-group">
  <button type="submit" class="btn btn-primary" value="Добавить">Добавить</button>

  </div>
</form>
            </div>
        </div>
        </div>
    </section>
@endsection
