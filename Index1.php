<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        alert("Are you want to visit the Website !");
        var a=confirm("Do you like our website ?");
        //alert(a);
        if(a){
            alert("Thanks");
        } else{
            alert("Soory");
        }
        /*function hello(){
            alert("Your response is recorded");
        }*/
    </script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Document</title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>
    <!--<h1>Welcome to my University</h1>-->
    <nav class=" navbar-light-bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">V.B.S. Purvanchal University,Jaunpur</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-right mb-2 mb-lg-0" style="">
        
        <li class="nav-item">
          <a class="nav-link" href="Index1.php">Home</a>
        
          </li>
          <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        
          </li>
          <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        
          </li>
          <li class="nav-item">
          <a class="nav-link" href="">Contact</a>
        
          </li>
          </ul>
       
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Carousel Example</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="image/gate.jpg" alt="VBSPU" width="1100" height="500">
      </div>

      <div class="item">
        <img src="image/unsiet.jpg" alt="Rajju Bhaiya Institute of Reseach & Applied Sciences" width="1100" height="500">
      </div>
    
      <div class="item">
        <img src="image/Research.jpg" alt="New york" width="1100" height="500">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">About Us</h2>
    </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="image/pharmacy_library.jpg" class="img-fluid about img">
                    
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2>It is a state University.</h2>
                    <p class="py-3">Purvanchal University, Jaunpur, was renamed as Veer Bahadur Singh Purvanchal University in honor of late Shri Veer Bahadur Singh, former Chief Minister of Uttar Pradesh. It was established on 2nd October, 1987 as an Affiliating University under the Uttar Pradesh State Universities Act 1973. The university has witnessed continuous qualitative and quantitative growth, excelling in academic and administrative activities. Transparent and efficient academic administration is among the distinctive characteristics that have propelled VBSPU to emerge as one of the leading universities in the country.</p>
                    <a href="about.php" class="btn btn-success"> Check More </a>
                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                    <img src="image/engg.jpg" class="img-fluid">
                    
                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                    <img src="image/download.jpg" class="img-fluid">
                    
                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                    <img src="image/Research.jpg" class="img-fluid">
                    
                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                    <img src="image/pharmacy_library.jpg" class="img-fluid">
                    
                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                    <img src="image/pharmacy_library.jpg" class="img-fluid">
                    
                </div>

            </div>
        </div>
</section>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Our Services</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
            <img class="card-img-top" src="image/mira.jpg" alt="Card image">
                        <div class="card-img-overlay">
                            <h3 class="card-title">Mirabai Hostel, VBSPU</h3>
                                <p class="card-text">Some example text.</p>
                                <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
            <img class="card-img-top" src="image/droupadi.jpg" alt="Card image">
                        <div class="card-img-overlay">
                            <h3 class="card-title">Droupadi Hostel, VBSPU</h3>
                                <p class="card-text">Some example text.</p>
                                <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
            <img class="card-img-top" src="image/vishwa.jpg" alt="Card image">
                        <div class="card-img-overlay">
                            <h3 class="card-title">Vishwakarma Hostel, VBSPU</h3>
                                <p class="card-text">Some example text.</p>
                                <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Our Gallery</h2>
    </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    
                        <img src="image/vishwa.jpg" class="img-fluid pb-5">
                    
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    
                        <img src="image/vishwa.jpg" class="img-fluid pb-5">
                    
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    
                        <img src="image/vishwa.jpg" class="img-fluid pb-5">
                    
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    
                        <img src="image/vishwa.jpg" class="img-fluid pb-5">
                    
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    
                        <img src="image/vishwa.jpg" class="img-fluid pb-5">
                    
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    
                        <img src="image/vishwa.jpg" class="img-fluid pb-5">
                    
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    
                        <img src="image/vishwa.jpg" class="img-fluid pb-5">
                    
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    
                        <img src="image/vishwa.jpg" class="img-fluid pb-5">
                    
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    
                        <img src="image/vishwa.jpg" class="img-fluid pb-5">
                    
                </div>
            </div>
         </div>   
</section>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Our Gallery</h2>
    </div>
    <div class="text-center">
        <form action="userinfo.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="user" autocomplete="off" class="form-ccontrol">
            </div>
            <div class="form-group">
                <label>Email Id</label>
                <input type="text" name="email" autocomplete="off" class="form-ccontrol">
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="num" name="mobile" autocomplete="off" class="form-ccontrol">
            </div>
            <div class="form-group">
                <label>Comments</label>
                <textarea class="form-ccontrol" name="comments">
                </textarea>
            </div>
            <div>
                <button type="submit" class="btn btn-success">Submit Now</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>

        </form>
    </div>
</section>    

<footer>
    
        <p class="p-3 bg-dark text-white text-center">
            @VBSPU 2024
        </p>
    
</footer>

<!--To adding php file in other file, syntax is <?php include 'filename.php'; ?>   -->


</body>
</html>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>