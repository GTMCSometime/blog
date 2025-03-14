@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Необходимо подтвердить свою почту') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Новое сообщение отправлено.') }}
                        </div>
                    @endif

                    {{ __('Для получения доступа к странице, подтвердите почту.') }}
                    {{ __('Пожалуйста, проверьте её.') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('нажмите, для повторной отправки') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
