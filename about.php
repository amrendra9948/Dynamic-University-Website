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

<div class="jumbotron text-center" >
  <h3>Created by Amrendra</h1>
  <p >All rights are reserved at VBSPU</p>
</div>
<footer>
    
        <p class="p-3 bg-dark text-white text-center">
            @VBSPU 2024
        </p>
    
</footer>


</body>
</html>