@extends('layouts.app')
@section('content')

                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block" src="{{ asset('img/1.jpg')}}" alt="First slide" width="100%" height="480px">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block" src="{{ asset('img/2.jpg')}}" alt="Second slide" width="100%" height="480px">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block0" src="{{ asset('img/4.jpg')}}" alt="Third slide" width="100%" height="480px">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
<div class="container" style="margin-top:-10% ;color:white;">
  
  <div class="card-deck">
    <div class="card">
      <img class="card-img-top" src="{{ asset('img/card-1.jpg')}}" alt="Card image cap" height="225px">
      <div class="card-body"   style="background-color:#2E2E2E">
        <h5 class="card-title">Mind</h5>
        <p class="card-text">Refresh your mind</p>
     </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="{{ asset('img/card-2.jpeg')}}" alt="Card image cap" height="225px">
      <div class="card-body"   style="background-color:#2E2E2E">
        <h5 class="card-title">Body</h5>
        <p class="card-text">make you body vibrant</p>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="{{ asset('img/card-3.jpeg')}}" alt="Card image cap" height="225px">
      <div class="card-body" style="background-color:#2E2E2E">
        <h5 class="card-title">Soul</h5>
        <p class="card-text">make your soul blissfull</p>

      </div>
    </div>
  </div>

  <div class="card mb-3 mt-2" style="max-width: 100%;height:300px; background-color:#2E2E2E">
    <div class="row no-gutters">
      <div class="col-md-5">
       
      <img src="{{asset('img/a.png')}}" width="100%" height="300px" alt="img">
  
      </div>
      <div class="col-md-7">
        <div class="card-body">
          <div class="card-title"><h2 style="color:red">OWNERSHIP</h2><h3>MODELS</h3></div>
          <p class="card-text">Own and operate your own gym page.
            This model is perfect for you
            if you are a passionate entrepreneur who is ready 
            to wake up and do what you love
            —making people stronger
            and crushing business goals along the way.</p>
          </div>
      </div>
    </div>
  </div>

  <div class="card mb-3" style="background-color:#2E2E2E">
    <img class="card-img-top" src="{{asset('img/girl.jpg')}}" alt="Card image cap">
    <div class="card-body">
      <h2 class="card-title" style="color:red">What is OURBOROUS GYM ???</h2>
      <p class="card-text" >Ouroboros GYM is a small project created
        for the small gyms to evolve from their
        traditional,Register based management 
        system to a more sort out and easy way 
        to manage their information. </p>

    </div>
  </div>


  <div class="card mb-3 mt-2" style="max-width: 100%;height:400px; background-color:#2E2E2E">
    <div class="row no-gutters">
      <div class="col-md-5">
       
      <img src="{{asset('img/qqq.png')}}" width="100%" height="400px" alt="img">
  
      </div>
      <div class="col-md-7">
        <div class="card-body">
          <h5 class="card-title"><h2 style="color:red"> TURN-KEY<h2>
            BUSINESS MODEL</h5>
          <p class="card-text">The Ourborous fitness GYM management is a well designed 
            system dedicated to serving clients who want a unique, fun,
            and proven workout that guarantees results.
            Our turn-key business methods offer a blueprint for
            success.</p>
         
          <p class="card-text"> Fitness is a $30 billion industry.</p>

          <p class="card-text">Our turn-key system makes it simple to own and operate.</p>
        </div></div>
    </div>
  </div>

@endsection