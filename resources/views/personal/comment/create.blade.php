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
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
          <div class="col-12">
            <!-- small box -->
Ответ {{ $userName }}
На сообщение {{ $user_id->message }}
a ={{ $a }}
b = {{ $b }}
            </div>
        </div>
        </div>
    </section>
@endsection
