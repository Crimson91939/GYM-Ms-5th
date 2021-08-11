<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OURBOROUS GYM</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>
    .ram{
      padding: 0px 20px;

    }
    .fot{
      border-top:4px solid rgba(200,0,0,0.9);
    }
    .fot-color{
      background-color: black;
      color: whitesmoke;
      position: relative;
      bottom:0px;
      margin-top: 50px;
    }
    
    .push{
        margin-top: 4%;
        margin-bottom:8.4%;
    }
  </style>
</head>
<body style="background-color:#212121">
    

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="{{route('land')}}">OURBOROUS GYM</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText" style="margin-left:60%">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active ram">
          <a class="nav-link" href="{{route('land')}}">Home <span class="sr-only">(current)</span></a>
        </li>
       
            <li class="nav-item ram">
              <a class="nav-link" href="{{route('register')}}">register</a></li>
              
      <li class="nav-item dropdown ram">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  login
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{route('admin.login')}}">Admin login</a>
                  <a class="dropdown-item" href="{{route('gym.login')}}">GYM login</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{route('member.login')}}" style="color:red" >Member login</a>
                </div>
              </li>
      </ul>
    </div>
  </nav>
<main>
    @yield('content')

</main>

<!-- Footer -->
<footer class="page-footer font-small color-dark pt-4 fot fot-color" style="color:white" >

  <!-- Footer Elements -->
  <div class="container">

    <!-- Call to action -->
    <ul class="list-unstyled list-inline text-center py-2">
      <li class="list-inline-item">
        <h5 class="mb-1">Register for free</h5>
      </li>
      <li class="list-inline-item">
        <a href="{{route('register')}}" class="btn btn-outline-white btn-rounded">Sign up!</a>
      </li>
    </ul>
    <!-- Call to action -->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> Ourborous.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->




</footer>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>