@extends('personal.layouts.main')
@section('content')
<section class="content">
<div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Понравившиеся посты</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Домашняя страница</li> 
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
        <div class="col-6">
        <table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Название</th>
      <th colspan="3" class="text-center">Действие</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($posts as $post)
    <tr>
      <td>{{ $post->id}}</td>
      <td>{{ $post->title}}</td>
      <td><a href="#"><i class="far fa-eye"></a></td>
      <td><a href="#" class="text-success"><i class="fas fa-pencil-alt"></a></td>
      <td>
        <form action="{{ route('personal.liked.delete', $post->id) }}", method="post">
          @csrf
          @method('delete')
          <button type="submit" class="border-0">
        <i class="text-danger"><i class="fas fa-trash text-danger" role="button"></i>
        </button>
        </form>
      </td>
      @endforeach
    </tr>
  </tbody>
</table>
</div>
</div> 
      </div>
    </section>
@endsection
