<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mali&display=swap" rel="stylesheet">
<link href="{{asset('storage/css/main.css')}}" rel="stylesheet">


</head>
  <body>

    <nav class="navbar navbar-expand-md navbar-dark" style="background-color:#16A085;" >
      <a class="navbar-brand" href="#">My Challenge</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Body Shape</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/body">Body Weight</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Nutrients</a>
          </li>
        </ul>
      </div>
    </nav>
    <br>

    <div class="container-fluid">
    <center>  <h3>History My Challenge</h3></center>
    <div class="form-inline">

             <div class="card" style="width:150px">
      <img class="card-img-top" src="https://cdn.pixabay.com/photo/2014/02/27/16/10/tree-276014_960_720.jpg" alt="Card image">
      <div class="card-body">
        <h4 class="card-title">Day#</h4>
        <p class="card-text">น้ำหนัก :73</p>
        <p class="card-text">Fat%:36</p>

      </div>
    </div>

    </div>
        </div>
  </body>
</html>
