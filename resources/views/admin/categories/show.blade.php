@extends('admin.layouts.main')
@section('content_header')
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <div class="col- mb-3">
            <a href="{{ route('admin.category.create')}}" class="btn btn-block btn-primary"> Добавить</a>
            </div>
          <div class="col-12">
            <!-- small box -->
            Категории
            </div>
        </div>
        <div class="row">
        <div class="col-6">
        <table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Название</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{ $category->id}}</td>
      <td>{{ $category->title}}</td>
    </tr>
  </tbody>
</table>
<div class="row">
        <div class="col- mb-3">
<a href="{{ route('admin.category.index')}}" class="btn btn-block btn-danger"> Назад</a>
        </div>
</div>
</div>
</div> 
        </div>
    </section>
@endsection
