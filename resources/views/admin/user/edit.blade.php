@extends('admin.layouts.main')
@section('content_header')
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12">
            <!-- small box -->
            <h6 class="mb-3">Редактирование пользователя</h6>
            <form action="{{ route('admin.user.update',$user->id) }}" method="post" class="w-25">
              @csrf
              @method('patch')
  <div class="mb-3">
    <label for="name" class="form-label">Имя</label>
    <input type="text" class="form-control" name="name" placeholder="Введите имя"
     value="{{ $user->name}}">
    @error('name')
<div class="text-danger">{{ $message }}</div>
  @enderror
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Почта</label>
    <input type="text" class="form-control" name="email" placeholder="Ваша почта"
    value="{{ $user->email}}">
    @error('email')
<div class="text-danger">{{ $message }}</div>
  @enderror
  </div>

  <button type="submit" class="btn btn-primary" value="Добавить">Обновить</button>
</form>
            </div>
        </div>
        </div>
    </section>
@endsection
