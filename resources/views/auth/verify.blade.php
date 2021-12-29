@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Na twój adres e-mail zostało wysłane potwierdzenie') }}
                        </div>
                    @endif

                    {{ __('Proszę sprawdzić swój email przed przejściem dalej.') }}
                    {{ __('Jeśli nie otrzymałeś maila') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Kliknij tutaj') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
