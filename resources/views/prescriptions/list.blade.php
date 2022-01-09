@extends('layouts.app')

@section('title')
    Recepty 
@endsection

@section('content')

<div class="container">
    <br>
    <h2>Twoje recepty</h2>
    <table class="table">
            <tr>
                <th>Lekarstwa</th>
                <th>Data wydania recepty</th>
            </tr>
            @foreach($prescriptions as $prescription)
            @if(Auth::user()->id == $prescription->user_id)
            <tr>
                <td>{{$prescription->medicine}} </td>
                <td>{{$prescription->created_at}}</td>
                <td><a href="{{url('/prescription/pdf',[$prescription->id])}}">Pobierz w formie PDF</a></td>
                <td><a href="{{url('/prescription/show',[$prescription->id])}}">Pokaż szczegółowo</a></td>
            </tr>          
            @endif
            @endforeach
    </table>
</div>
@endsection