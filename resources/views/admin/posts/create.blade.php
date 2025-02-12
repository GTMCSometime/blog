@extends('admin.layouts.main')
@section('content_header')
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12">
            <!-- small box -->
            <h6 class="mb-3">Добавление поста</h6>
            <form action="{{ route('admin.post.store' )}}" method="post">
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
  <div class="form-group">
  <button type="submit" class="btn btn-primary" value="Добавить">Добавить</button>

  </div>
</form>
            </div>
        </div>
        </div>
    </section>
@endsection
