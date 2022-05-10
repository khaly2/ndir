<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href=" {{ asset('css/app.css') }}">
<link rel="stylesheet" href="accueil.css">
</head>

<body>

<!--sidebar-->
<div class="sidebar fixed-top">
  <a class="active" href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>

<div class="container-fluid Big-Blog">
 <!--Banniere-->
 <div class="container-fluid">
<img src="images/isep.jpg" alt="ISEP" class="img-fluid">
</div>

<div class="container blog-first">
  <h1 class="h1">Bienvenue Sur notre plateforme de Pointage</h1>
   <hr>
</div>

<div class="container service-blog">
      <div class="service-item">
          <div class="icon"></div>
          <h2>Secretaire</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis debitis rerum, magni voluptatem sed
            architecto placeat beatae tenetur officia quod</p>
            <a href="{{route('secconnect')}}" class="btn btn-primary">Se connecter</a>
        </div>

        <div class="service-item">
          <div class="icon"></div>
          <h2>Chef Departement</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis debitis rerum, magni voluptatem sed
            architecto placeat beatae tenetur officia quod</p>
            <a href="{{route('chefconnect')}}" class="btn btn-primary">Se connecter</a>
        </div>

        <div class="service-item">
          <div class="icon"></div>
          <h2>Professeur</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis debitis rerum, magni voluptatem sed
            architecto placeat beatae tenetur officia quod</p>
            <a href="{{route('profconnect')}}" class="btn btn-primary">Se connecter</a>
        </div>

        <div class="service-item">
          <div class="icon"></div>
          <h2>Apprennant</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis debitis rerum, magni voluptatem sed
            architecto placeat beatae tenetur officia quod</p>
            <a href="{{route('appconnect')}}" class="btn btn-primary">Se connecter</a>
        </div>
      
   </div>

   <div class="container my-5">

<footer class="text-center text-lg-start" style="background-color: #db6930;" >
  <div class="container d-flex justify-content-center py-5">
    <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #54456b;">
      <i class="fab fa-facebook-f"></i>
    </button>
    <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #54456b;">
      <i class="fab fa-youtube"></i>
    </button>
    <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #54456b;">
      <i class="fab fa-instagram"></i>
    </button>
    <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #54456b;">
      <i class="fab fa-twitter"></i>
    </button>
  </div>

  <!-- Copyright -->
  <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>

</div>
    
</div>

</body>
</html>