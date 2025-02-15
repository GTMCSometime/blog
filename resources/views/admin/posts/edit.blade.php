@extends('admin.layouts.main')
@section('content_header')
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12">
            <!-- small box -->
            <h6 class="mb-3">Редактирование поста</h6>
            <form action="{{ route('admin.post.update',$post->id) }}" method="post" enctype="multipart/form-data">
              @csrf
              @method('patch')
              <div class="mb-3 form-group w-25">
    <label for="title" class="form-label">Название</label>
    <input type="text" class="form-control" name="title" placeholder="Название поста"
    value="{{ $post->title }}">
    @error('title')
<div class="text-danger">Это поле необходимо заполнить</div>
  @enderror
  </div>
  <div class="form-group">
  <textarea id="summernote" name="content"> {{ $post->content }} </textarea>
  @error('content')
<div class="text-danger">Это поле необходимо заполнить</div>
  @enderror
  </div>
  <div class="form-group w-50">
  <select class="form-select" aria-label="Default select example" name="category_id">
  <option selected>Выберите категорию</option>
  @foreach ($categories as $category)
  <option value="{{ $category->id }}"
  {{ $category->id == $post->category_id ? 'selected' : '' }}>
  {{ $category->title }}</option>
  @endforeach
</select>
@error('category_id')
<div class="text-danger">Необходимо выбрать категорию</div>
  @enderror
  </div>
  <div class="mb-6 w-50">
                <div class="form-group">
                  <label>Теги</label>
                  <select class="select2" multiple="multiple" name="tag_ids[]" data-placeholder="Выберите тег(и)" style="width: 100%;">
                    @foreach ($tags as $tag) 
                    <option {{ is_array($post->tags->pluck('id')->toArray()) &&
                     in_array($tag->id, $post->tags->pluck('id')->toArray()) ? 'selected' : '' }}
                     value="{{ $tag->id }}">{{ $tag->title }}</option>
                    @endforeach
                  </select>
                </div>
                </div>
  <div class="w-25">
  <div class="mb-3">
  <label for="formFile" class="form-label">Добавить главное изображение</label>
  <div class="w-50 mb-2">
    <img src="{{ url('storage/' . $post->preview_image) }}" alt="preview_image" class="w-50">
  </div>
  <input class="form-control" type="file" name="main_image" value="{{ old('main_image') }}">
  </div>
<div class="mb-3">
  <label for="formFile" class="form-label">Добавить превью</label>
  <div class="w-50 mb-2">
    <img src="{{ url('storage/' . $post->main_image) }}" alt="main_image" class="w-50">
  </div>
  <input class="form-control" type="file" name="preview_image" value="{{ old('preview_image') }}">
</div>
</div>
  <div class="form-group">
  <button type="submit" class="btn btn-primary" value="Обновить">Обновить</button>

  </div>
</form>
            </div>
        </div>
        </div>
    </section>
@endsection
