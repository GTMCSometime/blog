@extends('admin.layouts.main')
@section('content_header')
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <div class="col- mb-3">
            <a href="{{ route('admin.user.create')}}" class="btn btn-block btn-primary"> Добавить</a>
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
      <th>Никнейм</th>
      <th colspan="3" class="text-center">Действие</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
    <tr>
      <td>{{ $user->id}}</td>
      <td>{{ $user->name}}</td>
      <td><a href="{{ route('admin.user.show', $user->id) }}"><i class="far fa-eye"></a></td>
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
      @endforeach
    </tr>
  </tbody>
</table>
</div>
</div> 
        </div>
    </section>
@endsection
