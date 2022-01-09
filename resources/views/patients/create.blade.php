@extends('layouts.app')

@section('title')
    Dodawanie pacjenta
@endsection

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary">{{ __('Dodawanie pacjenta') }}</div>
                <form method="POST" action="{{ route('register') }} ">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="POST"> 
                    <div class="col mb-3 p-1">
                        <label for="firstname">Imię</label>
                        <input type="text" class="form-control" name="firstname">
                    </div>

                    <div class="col mb-3 p-1">
                        <label for="lastname">Nazwisko</label>
                        <input type="text" class="form-control" name="lastname">
                    </div>

                    <div class="col mb-3 p-1">
                        <label for="birthday">Data urodzenia</label>
                        <input type="date" class="form-control" name="birthday">
                    </div>

                    
                    <div class="col mb-3 p-1">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" name="email">
                    </div>

                    <div class="col mb-3 p-1">
                        <label for="pesel">PESEL</label>
                        <input type="pesel" class="form-control" name="pesel">
                    </div>

                    <div class="col mb-3 p-1">
                        <label for="password">Hasło</label>
                        <input type="password" class="form-control" name="password">
                    </div>

                    <div class="mb-3 p-1">
                        <label for="password-confirm">Potwierdź hasło</label>
                        <input type="password" id="password-confirm" class="form-control" name="password_confirmation">
                    </div>

                    <div class="mb-0 p-1">
                    <button type="submit" class="btn btn-primary">Utwórz</div>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>
@endsection