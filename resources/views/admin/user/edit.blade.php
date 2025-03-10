@extends('admin.layouts.main')
@section('content_header')
<section class="content">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Редактирование пользователя</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Домой</a></li>
              <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">Пользователи</a></li>
              <li class="breadcrumb-item active">{{ $user->name }}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
          <div class="col-12">
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
  <input type="hidden" name="user_id" value="{{ $user->id }}">
  <div class="mb-3">
    <label for="email" class="form-label">Почта</label>
    <input type="text" class="form-control" name="email" placeholder="Ваша почта"
    value="{{ $user->email}}">
    @error('email')
<div class="text-danger">{{ $message }}</div>
  @enderror
  </div>
  <div class="form-group w-50">
  <select class="form-select" aria-label="Default select example" name="role">
  <option selected>Выберите роль пользователя</option>
  @foreach ($roles as $id => $role)
  <option value="{{ $id }}"
  {{ $id == $user->role ? 'selected' : ''}}>{{ $role }}</option>
  @endforeach
</select>
@error('role')
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
