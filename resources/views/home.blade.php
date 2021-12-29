@extends('layouts.app')
@section('content')
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('img/1.png')}}" class="img-fluid" >   
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/2.png')}}" class="img-fluid" >   
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/3.png')}}" class="img-fluid" >   
            </div>
        </div>
    </div>
@endsection
