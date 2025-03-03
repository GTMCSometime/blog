@extends('personal.layouts.main')
@section('content')
<section class="content">
<div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Домашняя страница</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Домой</li> 
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $likedPosts }}</h3>

                <p>Понравившиеся посты</p></a>
              </div>
              <div class="icon">
                <i class="far fa-heart"></i>
              </div>
              <a href="{{ route('personal.liked.index') }}" class="small-box-footer">подробнее  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $comments }}</h3>

                <p>Комментарии</p>
              </div>
              <div class="icon">
                <i class="far fa-comments"></i>
              </div>
              <a href="{{ route('personal.comment.index') }}" class="small-box-footer">подробнее  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
      </div>
      </div>
    </section>
@endsection
