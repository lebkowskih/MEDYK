@extends('layouts.app')

@section('title')
    Dodaj Szczepienie
@endsection 

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-header bg-primary">{{ __('Dodawanie szczepienia') }}</div>
                <form method="POST" action="{{URL::to('vaccination/store')}}">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="POST"> 
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="manufacturer">Marka szczepionki</label>
                            <input type="text" class="form-control" name="manufacturer" />
                            </select>
                        </div>
                       
                        {{-- tu nizej dokoncz dodawanie terminu szczepienia --}}
                        
                        <div class="mb-3">
                            <label for="medicine">Data</label>
                            <input type="datetime-local" class="form-control" name="date" />
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