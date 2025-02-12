@extends('admin.layouts.main')
@section('content_header')
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <div class="col- mb-3">
            <a href="{{ route('admin.post.create')}}" class="btn btn-block btn-primary"> Добавить</a>
            </div>
          <div class="col-12">
            <!-- small box -->
            Посты
            </div>
        </div>
        <div class="row">
        <div class="col-6">
        <table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Название</th>
      <th colspan="2" class="text-center">Действие</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{ $post->id}}</td>
      <td>{{ $post->title}}</td>
      <td><a href="{{ route('admin.post.edit', $post->id) }}" class="text-success"><i class="fas fa-pencil-alt"></a></td>
      <td>
        <form action="{{ route('admin.post.delete', $post->id) }}", method="post">
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
<a href="{{ route('admin.post.index')}}" class="btn btn-block btn-danger"> Назад</a>
        </div>
</div>
</div>
</div> 
        </div>
    </section>
@endsection
