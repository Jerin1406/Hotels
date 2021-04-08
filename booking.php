<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking</title>
</head>
 
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                  <img src=" https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqoHtGDfEi_OqFpV1OxeoxG0gOVU69PfKkmw&usqp=CAU" alt="" width="30" height="24" class="d-inline-block align-top">
                  SaSu
                </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="stays.php">stays</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="flights.php">Flights</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="car">car rents</a>
              </li>
        
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            
                  <li><a class="dropdown-item" href="#">Contact Us</a></li>
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
    
    <h1 style="color: rgb(14, 150, 230);"><center>BOOKING DETAILS</center></h1>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-4 col-md-4">
                <table class="table table-borderless">
                    <tr>
                        <td><strong style="color: navy;"> Username</strong></td>
                        <td><input style="color: maroon;" type="text" class="form-control" placeholder="Username"></td>
                    </tr>
                    <tr>
                        <td><strong style="color: navy;"> Email id</strong></td>
                        <td><input style="color: maroon;" type="text" class="form-control" placeholder="abc@gmail.com"></td>
                    </tr>
                    <tr>
                        <td><strong style="color: navy;"> Type</strong></td>
                        <td><input style="color: maroon;" type="text" class="form-control" placeholder="Villa/hotel/Apartment"></td>
                    </tr>
                    <tr>
                        <td><strong style="color: navy;"> Name</strong></td>
                        <td><input style="color: maroon;" type="text" class="form-control" placeholder="Name of Hotel"></td>
                    </tr>
                    <tr>
                        <td><strong style="color: navy;"> Password</strong></td>
                        <td><input style="color: maroon;" type="password" class="form-control" placeholder="password"></td>
                    </tr>
                    <tr>
                        <td><strong style="color: navy;"> Confirm password</strong></td>
                        <td><input style="color: maroon;" type="password" class="form-control" placeholder="Confirm Password"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                      <strong style="color: navy;">Agree to terms and conditions</strong>
                    </label>
                    <div class="invalid-feedback">
                      You must agree before submitting.
                    </div>
                  </div>
                  <tr>
                    <td></td>
                    <center>
                    <td><button class="btn btn-success">Order Now</button></td></center>
                </tr>
            </table>
            </div>
            <div class="col col-12 col-sm-4 col-md-4">
            </div>
            <div class="col col-12 col-sm-4 col-md-4">
                <img height="200" src="https://image.shutterstock.com/image-vector/alphabet-letter-h-on-yellow-600w-1458369092.jpg" alt="">
                <address style="font-family: Georgia, 'Times New Roman', Times, serif;">
                    <strong>SaSu Cochin</strong><br>
                    Phone Number : +91- 4869 - 232203<br>
                    Cochin <br>
                    Aluva-Kalamasery Road<br>
                    Eranakulam,Kerala<br>
                    685531 India 
                </address>
            </div>
            </div>
        </div>
    </div>
    
        
</body>
</html>