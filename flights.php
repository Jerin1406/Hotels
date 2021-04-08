<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking</title>
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
                <a class="nav-link active" aria-current="page" href="car">Car Rentals</a>
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
                        <td><strong style="color: navy;"> From</strong></td>
                        <td><input style="color: maroon;" type="text" class="form-control" placeholder="From"></td>
                    </tr>
                    <tr>
                        <td><strong style="color: navy;"> To</strong></td>
                        <td><input style="color: maroon;" type="text" class="form-control" placeholder="To"></td>
                    </tr>
                    <tr>
                        <td><strong style="color: navy;"> Date From</strong></td>
                        <td><input style="color: maroon;" type="date" class="form-control" placeholder="dd-mm-yyyy"></td>
                    </tr>
                    <tr>
                        <td><strong style="color: navy;"> To Date</strong></td>
                        <td><input style="color: maroon;" type="date" class="form-control" placeholder="dd-mm-yy"></td>
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
                    <td><button class="btn btn-success">Check Now</button></td></center>
                </tr>
            </table>
            </div>
        </div>
    </div>
    
        
</body>
</html>