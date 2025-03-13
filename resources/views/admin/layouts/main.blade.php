@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
@yield('maincontent')
@stop

@section('css')
<link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css' )}}">
<link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">

 {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
<script src="{{ asset('plugins/vendor/jquery/jquery.min.js' )}}"></script>
<script src="{{ asset('plugins/vendor/jquery/jquery-ui.min.js' )}}"></script>
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js' )}}"></script>
<script src="{{ asset('plugins/vendor/bootstrap/js/bootstrap.bundle.min.js' )}}"></script>
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js' )}}"></script>
<script>
$(document).ready(function() {
  $('#summernote').summernote({
    toolbar: [
    // [groupName, [list of button]]
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['fontsize', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']]
  ]}
  );
});
</script>
<script>
$(function () {
  bsCustomFileInput.init();
});
$('.select2').select2()
</script>
@stop
