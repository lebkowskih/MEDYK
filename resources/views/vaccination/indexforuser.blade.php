@extends('layouts.app')

@section('title')   
    Sprwadź Szczepienie
@endsection 

@section('content')

<div class="container">
    <br>
 
    @foreach($vaccinationsList  as $vaccination)
    @if(Auth::user()->id == $vaccination->user_id)
    <div class="card">
        <div class="card-header text-bold">
          <b>{{$vaccination  -> manufacturer}}</b>
        </div>
        <div class="card-body">
          <input type="hidden" name="vaxid" value="{{$vaccination->id}}"> 
          <h5 class="card-title">Data szczepienia: {{$vaccination -> date}}</h5>
        </div>
    </div>
    @endif
    @endforeach

</div>

@endsection