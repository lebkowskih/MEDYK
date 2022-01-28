@extends('layouts.app')
@section('content')
    @if($errors->any())
    @endif



    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
              <a  href="http://127.0.0.1:8000/vaccination">
                <img src="{{asset('img/1.png')}}" class="img-fluid" >   
              </a>
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/2.png')}}" class="img-fluid" >   
            </div>
            <div class="carousel-item">
              <a  href="http://127.0.0.1:8000/prescription">
                <img  src="{{asset('img/3.png')}}" class="img-fluid" >   
            </div>
        </div>
    </div>  

    
    <div class="container">
      <div class="row text-center">
        <h1 class="display-1 p-3 text-primary" style="text-decoration: underline;">Nasi specjaliści</h1>
        <div class="col-lg-4">
        
          <img  src="{{asset('img/doc1.jpg')}}" class="rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></svg>
            
          <h2 class="text-primary">dr Adam</h2>
          <p>Lekarz w trakcie specjalizacji z ginekologii i położnictwa. Absolwent Gdańskiego Uniwersytetu Medycznego</p>
          <p><a class="btn btn-primary" href="tel:111222333">ZADZWOŃ!</a></p>
        </div>
        <div class="col-lg-4">
          <img src="{{asset('img/doc2.jpg')}}" class="rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></svg>
  
          <h2 class="text-primary">dr Grażyna</h2>
          <p>Lekarz specjalista w dziedzinie psychiatrii. Pomaga osobom w kryzysie psychicznym jak i ich rodzinom.</p>
          <p><a class="btn btn-primary" href="tel:111222333">ZADZWOŃ!</a></p>
        </div>
        <div class="col-lg-4">
          <img src="{{asset('img/doc3.jpg')}}" class="rounded-circle" width="140" height="140"  role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></svg>
  
          <h2 class="text-primary">dr Krystian</h2>
          <p >Absolwent Warszawskiego Uniwersytetu Medycznego. Ukończył specjalizację rehabilitacji medycznej.</p>
          <p><a class="btn btn-primary" href="tel:111222333">ZADZWOŃ!</a></p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Najlepsze możliwe wyposażenie. </h2>
          <p class="lead">Najnowszy sprzęt pozwoli na szybkie zdiagnozowanie każdej choroby.</p>
        </div>
        <div class="col-md-5 p-3">
          <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="{{asset('img/przychodnia1.jpg')}}"  role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/></svg>
  
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Najlepsza kadra. </h2>
          <p class="lead">W naszej placówce pracuje sztab wybitnych specjalistów gotowych pomóc chorym pacjentom..</p>
        </div>
        <div class="col-md-5 order-md-1 p-3">
          <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="{{asset('img/przychodnia2.jpg')}}" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/></svg>
  
        </div>
      </div>
    </div>

@endsection
