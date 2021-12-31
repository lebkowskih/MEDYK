@extends('layouts.app')

@section('title')
    Wypisywanie recepty 
@endsection

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-header bg-primary">{{ __('Wypisywanie recepty') }}</div>
                <form method="POST" action="{{URL::to('prescription/store')}}">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="POST"> 
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="user">Pacjent</label>
                            <select class="form-select" name="user">
                                @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->firstname}}</option>
                                @endforeach
                            </select>
                        </div>
                       

                        <div class="mb-3">
                            <label for="medicine">Lekarstwa</label>
                            <textarea type="text" class="form-control" name="medicine" rows="3"></textarea>
                        </div>

                        <div class="mb-0">
                            <input type="submit" value="Dodaj"  class="btn btn-primary">
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
