@extends('layouts.app')

@section('title')
    Recepty 
@endsection

@section('content')

<div class="container">
    <h2>Twoje recepty</h2>
    <table class="table">
            <tr>
                <th>Lekarstwa</th>
                <th>Data wydania recepty</th>
            </tr>
            @foreach($prescriptions as $prescription)
            <tr>
                <td>{{$prescription->medicine}} </td>
                <td>{{$prescription->created_at}}</td>
                <td><a href="">Pobierz w formie PDF</a></td>
            </tr>          
            @endforeach
        
    </table>
</div>
@endsection