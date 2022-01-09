@extends('layouts.app')

@section('title')
    Recepta
@endsection 

@section('content')

<br>    

<div class="container">
    <table class="table">
        <tr>
            <td>Przepisane lekarstwa</td>
            <td> {{$prescriptions->medicine}} </td>
        </tr>

        <tr>
            <td> Imie i nazwisko </td>
            <td> {{$prescriptions->user_id}} </td>
        </tr>

    </table>
</div>
@endsection