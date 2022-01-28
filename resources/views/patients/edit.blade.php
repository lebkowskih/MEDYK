@extends('layouts.app')

@section('title')
    Edytuj pacjenta
@endsection

@section('content')


<div class="container">
    <br>
    <div class="row justify-content-center">   
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary">{{ __('Pacjent do edycji') }}</div>
                <form method="POST" action="{{URL::to('patient/update') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="POST"> 

                    <div class="col mb-3 p-1"></div>
                    <select type="text" class="form-control" name="user_id" id="user_id">
                        @foreach($userList as $user)
                        <option value="{{$user->id}}">{{$user->firstname}} {{$user->lastname}}</option>
                        @endforeach
                    </select>
                    
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

                    <div class="mb-0 p-1">
                    <button type="submit" value="Edytuj" class="btn btn-primary">Edytuj</div>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>




@endsection ('content')

