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
            <td> {{$prescription->medicine}} </td>
        </tr>



    </table>
</div>
@endsection