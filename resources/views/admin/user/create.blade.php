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
    <label for="name" class="form-label">Имя</label>
    <input type="text" class="form-control" name="name" placeholder="Введите имя" value="{{ old('name') }}">
    @error('name')
<div class="text-danger">{{ $message }}</div>
  @enderror
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Почта</label>
    <input type="text" class="form-control" name="email" placeholder="Ваша почта" value="{{ old('email') }}">
    @error('email')
<div class="text-danger">{{ $message }}</div>
  @enderror
  </div>
  <div class="form-group w-50">
  <select class="form-select" aria-label="Default select example" name="role">
  <option selected>Выберите роль пользователя</option>
  @foreach ($roles as $id => $role)
  <option value="{{ $id }}"
  {{ $id === old('role') ? 'selected' : ''}}>{{ $role }}</option>
  @endforeach
</select>
@error('role')
<div class="text-danger">{{ $message }}</div>
  @enderror
  </div>

  <button type="submit" class="btn btn-primary" value="Добавить">Добавить</button>
</form>
            </div>
        </div>
        </div>
    </section>
@endsection
