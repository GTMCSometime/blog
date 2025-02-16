@extends('admin.layouts.main')
@section('content_header')
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12">
            <!-- small box -->
            <h6 class="mb-3">Добавление пользователя</h6>
            <form action="{{ route('admin.user.store' )}}" method="post" class="w-25">
              @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Название</label>
    <input type="text" class="form-control" name="name" placeholder="Введите имя">
    @error('name')
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
