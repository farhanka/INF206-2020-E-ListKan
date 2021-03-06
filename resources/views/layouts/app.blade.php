<!doctype html>
<html lang="en">
  <head>
      
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <script src="https://kit.fontawesome.com/d02c2604b8.js" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link href="{{ asset('css\simple-line-icons.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css\app.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css\all.min.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('fontawesome\css\all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css\card.css') }}">
    <link href="{{ ('css/landing-page.min.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
    
  </head>

  <body >
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand " href="/">ListKan</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                </ul>
                
                @yield('navtext')
               
            </div>
        </div>
    </nav>
     @yield('content')
  

    <div class="container-fluid bg-dark copyright">
        Copyright &copy 2020 ListKan 
    </div>

    
  </body>
</html>
<script>

function myFunction() {
  var desc = document.getElementById("listkan");
  var nama = document.getElementById("collapseExample");
  if (nama.style.display !== "none") {
    desc.style.display = "block";
  } else if (desc.style.display !== "none") {
    nama.style.display = "block";
  }
}
</script>