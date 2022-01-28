@extends('layouts.app')

@section('title')   
    Sprwadź Szczepienie
@endsection 

@section('content')

<div class="container">
    <br>
 
    @foreach($vaccinationsList  as $vaccination)
    @if($vaccination?->isAvailable == 1 )
    <form method="POST" action="{{URL::to('/vaccination/signin')}}">
      {{ csrf_field() }}
    <div class="card">
        <div class="card-header text-bold">
          <b>{{$vaccination  -> manufacturer}}</b>
        </div>
        <div class="card-body">
          <input type="hidden" name="vaxid" value="{{$vaccination->id}}"> 
          <h5 class="card-title">Data szczepienia: {{$vaccination -> date}}</h5>
          <input type="submit" value="Zapisz się" class="btn btn-success"/>
        </div>
    </div>
    @endif
    @endforeach

</div>

@endsection