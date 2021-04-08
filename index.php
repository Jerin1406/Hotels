<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking</title>
</head>
<body style="background-color: rgb(200, 243, 243);">
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                  <img src=" https://image.shutterstock.com/image-vector/alphabet-letter-h-on-yellow-600w-1458369092.jpg" alt="" width="30" height="24" class="d-inline-block align-top">
                  Hotels
                </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="stays.php">Stays</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="flights.php">Flights</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="HomeAppliances.php">Car Rentals</a>
              </li>
        
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            
                  <li><a class="dropdown-item" href="contact.php">Contact Us</a></li>
                  <li><a class="dropdown-item" href="#">support</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="booking.php">Booking</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Features</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-info" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img height="500" src="https://images.unsplash.com/photo-1505492537188-de71a52767cb?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img height="500" src="https://images.unsplash.com/reserve/8T8J12VQxyqCiQFGa2ct_bahamas-atlantis.jpg?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=750&q=80" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img height="500" src="https://images.unsplash.com/photo-1570214476695-19bd467e6f7a?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=750&q=80" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <br>
      <div class="container">
          <div class="row">
           
              <center><h2 style="text-decoration: maroon;">Welcome</h2></center>
            <div class="col col-12 col-sm-12 col-md-12">
                  <img height="700" src="https://cf.bstatic.com/static/img/bh/awareness/campaign/bh_aw_cpg_main_image/b0f5755d0651acbe9d3f3785a874258150b4393b.png" alt="">
              
            </div>
            
            
      </div>
      <br>
      <br>
      <div class="row">
              <div class="col col-12 col-sm-4 col-md-4">
                  <img height="230" src="data:image/jpeg;base64,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" alt="">
              <center> <strong>Hotels</strong></center>
               <center> 768,261 hotels</center>
                </div>
              <div class="col col-12 col-sm-4 col-md-4">
                  <img height="230" src="https://cf.bstatic.com/static/img/theme-index/carousel_320x240/card-image-apartments_300/9f60235dc09a3ac3f0a93adbc901c61ecd1ce72e.jpg" alt="">
                  <center> <strong>Apartments</strong></center>
                  <center> 699,393 apartments</center>
                </div>
              <div class="col col-12 col-sm-4 col-md-4">
                  <img height="230" src="https://cf.bstatic.com/static/img/theme-index/carousel_320x240/bg_resorts/6f87c6143fbd51a0bb5d15ca3b9cf84211ab0884.jpg" alt="">
                  <center> <strong>Resorts</strong></center>
                  <center> 18,212 resorts</center>
                </div>
          </div>
          <br>
          <div class="row">
                
                <div class="col col-12 col-sm-4 col-md-4">
                      <img height="230" src="https://cf.bstatic.com/static/img/theme-index/carousel_320x240/card-image-villas_300/dd0d7f8202676306a661aa4f0cf1ffab31286211.jpg" alt="">
                      <center> <strong>Villas</strong></center>
                      <center> 368,425 villas</center>
                    </div>
                <div class="col col-12 col-sm-4 col-md-4">
                    <img height="230" src="https://cf.bstatic.com/static/img/theme-index/carousel_320x240/card-image-chalet_300/8ee014fcc493cb3334e25893a1dee8c6d36ed0ba.jpg" alt="">
                    <center> <strong>Cabins</strong></center>
                    <center> 29,531 cabins</center>
                  </div>
                
          </div>
          <br>
          
          
      </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>