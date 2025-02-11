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
    @foreach ($categories as $category)
    <tr>
      <td>{{ $category->id}}</td>
      <td>{{ $category->title}}</td>
      @endforeach
    </tr>
  </tbody>
</table>
</div>
</div> 
        </div>
    </section>
@endsection
