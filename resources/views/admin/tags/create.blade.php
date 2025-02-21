@extends('admin.layouts.main')
@section('content_header')
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Добавление тега</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Домой</a></li>
              <li class="breadcrumb-item active">Теги</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
            <!-- small box -->
            <form action="{{ route('admin.tag.store' )}}" method="post" class="w-25">
              @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Название</label>
    <input type="text" class="form-control" name="title" placeholder="Название тега">
    @error('title')
<div class="text-danger">Это поле необходимо заполнить</div>
  @enderror
  </div>

  <button type="submit" class="btn btn-primary" value="Добавить">Добавить</button>
</form>
            </div>
        </div>
        </div>
    </section>
@endsection
