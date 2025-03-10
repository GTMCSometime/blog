@extends('admin.layouts.main')
@section('content_header')
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <div class="mb-3">
            <a href="{{ route('admin.user.create')}}" class="btn btn-block btn-primary"> Добавить</a>
            </div>
        </div>
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Пользователи</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Домой</a></li>
              <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">Пользователи</a></li>
              <li class="breadcrumb-item active">{{ $user->name }}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
        <div class="col-6">
        <table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Никнейм</th>
      <th>Почта</th>
      <th>Роль</th>
      <th colspan="2" class="text-center">Действие</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{ $user->id}}</td>
      <td>{{ $user->name}}</td>
      <td>{{ $user->email}}</td>
      <td>{{ $user->role === 0 ? 'Админ' : 'Читатель' }}</td>
      <td><a href="{{ route('admin.user.edit', $user->id) }}" class="text-success"><i class="fas fa-pencil-alt"></a></td>
      <td>
        <form action="{{ route('admin.user.delete', $user->id) }}", method="post">
          @csrf
          @method('delete') 
          <button type="submit" class="border-0">
        <i class="text-danger"><i class="fas fa-trash text-danger" role="button"></i>
        </button>
        </form>
      </td>
    </tr>
  </tbody>
</table>
<div class="row">
        <div class="col- mb-3">
<a href="{{ route('admin.user.index')}}" class="btn btn-block btn-danger"> Назад</a>
        </div>
</div>
</div>
</div> 
        </div>
    </section>
@endsection
