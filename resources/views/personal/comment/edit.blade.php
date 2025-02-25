@extends('personal.layouts.main')
@section('content')
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Редактирование комментария</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('personal.main.index') }}">Домой</a></li>
              <li class="breadcrumb-item"><a href="{{ route('personal.comment.index') }}">Комментарии</a></li>
              <li class="breadcrumb-item active">{{ $comment->message }}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
          <div class="col-12">
            <!-- small box -->
            <form action="{{ route('personal.comment.update',$comment->id) }}" method="post" class="w-50">
              @csrf
              @method('patch')
  <div class="mb-3">
    <textarea name="message" class="form-control" cols="30" rows="10">{{ $comment->message }}</textarea>
    @error('message')
    <div class="text-danger">Это поле необходимо заполнить</div>
    @enderror
  </div>

  <button type="submit" class="btn btn-primary" value="Добавить">Обновить</button>
</form>
            </div>
        </div>
        </div>
    </section>
@endsection
