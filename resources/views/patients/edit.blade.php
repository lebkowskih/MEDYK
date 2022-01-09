@extends('layouts.app')

@section('title')
    Dodaj autora 
@endsection

@section('content')
<div class="container">
    <h2>Edycja pacjetna</h2>

    <form action="{{URL::to('patient/update')}}" method="POST" role="form">
    {{ csrf_field() }}
    
    <div class="form group">
         <label for="name">Książka do edycji</label>
         <select type="text" class="form-control" name="user_id">
             @foreach($userList as $user)
             <option value="{{$user->id}}">{{$user->firstname}} {{$user->lastname}}</option>
             @endforeach
         </select>
    </div>

    <div class="form group">
        <label for="name"> Imie</label>
        <input type="text" class="form-control" name="firstname"/>
    </div>

    <input type="submit" value="Edytuj" class="btn btn-primary"/>

    </form>
</div>
@endsection ('content')