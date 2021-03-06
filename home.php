<!DOCTYPE html>
<html>
	<head>
		<title>Homepage</title>
		<meta charset="utf-8">
 		<meta name="viewport" content="width=device-width, initial-scale=1">
 		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>
	<body>
    <?php include 'header.php';?>
    <div class="container-fluid" style="margin-top: 50px;margin-bottom: 80px;">
      
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
            <img src="images/slider/slider1.jpg" alt="Los Angeles" style="width:100%;">
          </div>

          <div class="item">
            <img src="images/slider/slider2.jpg" alt="Chicago" style="width:100%;">
          </div>
        
          <div class="item">
            <img src="images/slider/slider3.jpg" alt="New york" style="width:100%;">
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
<div class="container" style="padding-top: 30px">
      <div class="row">

        <div class="col-md-4">
            <a href="dog-page.php">
              <div class="thumbnail" ><img src="images/dog/dog12.jpg" style="width: 100%">
              <h3>Dog Page Gallery</h3></div>
            </a>
        </div>

        <div class="col-md-4">
          <div class="thumbnail">
            <a href="cat-page.php">
              <img src="images/cat/cat1.jpg" style="width: 100%">
              <h3>Cat Page Gallery</h3>
            </a>
          </div>
        </div>

        <div class="col-md-4">
          <div class="thumbnail">
            <a href="nature-page.php">
              <img src="images/nature/nature1.jpg" style="width: 100%">
              <h3>Nature Page Gallery</h3>
            </a>
          </div>
        </div>

      </div>
</div>

    </div>
    <?php include 'footer.php';?>
	</body>
</html>