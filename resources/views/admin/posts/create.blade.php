@extends('admin.layouts.main')
@section('content_header')
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12">
          <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Добавление Поста</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Домой</a></li>
              <li class="breadcrumb-item active">Посты</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
            <!-- small box -->
            <form action="{{ route('admin.post.store' )}}" method="post" enctype="multipart/form-data">
              @csrf
  <div class="mb-3 form-group w-25">
    <label for="title" class="form-label">Название</label>
    <input type="text" class="form-control" name="title" placeholder="Название поста"
    value="{{ old('title') }}">
    @error('title')
<div class="text-danger">{{ $message }}</div>
  @enderror
  </div>
  <div class="form-group">
  <textarea id="summernote" name="content"> {{ old('content' )}} </textarea>
  @error('content')
<div class="text-danger">{{ $message }}</div>
  @enderror
  </div>
  <div class="form-group w-50">
  <select class="form-select" aria-label="Default select example" name="category_id">
  <option selected>Выберите категорию</option>
  @foreach ($categories as $category)
  <option value="{{ $category->id }}"
  {{ $category->id == old('category_id') ? 'selected' : ''}}>{{ $category->title }}</option>
  @endforeach
</select>
@error('category_id')
<div class="text-danger">{{ $message }}</div>
  @enderror
  </div>
  <div class="mb-6 w-50">
                <div class="form-group">
                  <label>Теги</label>
                  <select class="select2" multiple="multiple" name="tag_ids[]" data-placeholder="Выберите тег(и)" style="width: 100%;">
                    @foreach ($tags as $tag) 
                    <option {{ is_array(old('tag_ids')) &&
                     in_array($tag->id, old('tag_ids')) ? 'selected' : '' }}
                     value="{{ $tag->id }}">{{ $tag->title }}</option>
                    @endforeach
                  </select>
                  @error('tag_ids')
<div class="text-danger">{{ $message }}</div>
  @enderror
                </div>
                </div>
  <div class="w-25">
  <div class="mb-3">
  <label for="formFile" class="form-label">Добавить главное изображение</label>
  <input class="form-control" type="file" name="main_image" value="{{ old('main_image') }}">
  @error('main_image')
<div class="text-danger">{{ $message }}</div>
  @enderror
  </div>
<div class="mb-3">
  <label for="formFile" class="form-label">Добавить превью</label>
  <input class="form-control" type="file" name="preview_image" value="{{ old('preview_image') }}">
  @error('preview_image')
<div class="text-danger">{{ $message }}</div>
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
