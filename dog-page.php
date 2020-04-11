<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		#home{
  			margin-top: 10px;
  			text-align: left;
  			background: url('images/dog/jumbotron-background.jpg');
  			background-position: center;
  			background-repeat: no-repeat;
  			background-size: cover;
  			text-shadow: 2px 0px #000000;
		}
	</style>
	<title>Dog Gallery</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php include 'header.php';?>
	<div class="container bg-info" style="margin-top: 50px;margin-bottom: 80px;">

		<div class="jumbotron" id="home">
    		<h1>Dog Gallery</h1>
    		<p>Dog Image gallery using Bootstrap4.</p>
  		</div>
		<div class="row">
				<div class="col-md-3">
					<div class="thumbnail">
						<a href="images/dog/dog1.jpg"><img src="images/dog/dog1.jpg" width="100%" alt="dog image number 1" class="img-rounded"></a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="thumbnail">
						<a href="images/dog/dog2.jpg"><img src="images/dog/dog2.jpg" width="100%" alt="dog image number 2" class="img-rounded"></a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="thumbnail">
						<a href="images/dog/dog3.jpg"><img src="images/dog/dog3.jpg" width="100%" alt="dog image number 3" class="img-rounded"></a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="thumbnail">
						<a href="images/dog/dog4.jpg"><img src="images/dog/dog4.jpg" width="100%" alt="dog image number 4" class="img-rounded"></a>
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-md-3">
					<div class="thumbnail">
						<a href="images/dog/dog5.jpg"><img src="images/dog/dog5.jpg" width="100%" alt="dog image number 5" class="img-rounded"></a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="thumbnail">
						<a href="images/dog/dog6.jpg"><img src="images/dog/dog6.jpg" width="100%" alt="dog image number 6" class="img-rounded"></a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="thumbnail">
						<a href="images/dog/dog7.jpg"><img src="images/dog/dog7.jpg" width="100%" alt="dog image number 7" class="img-rounded"></a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="thumbnail">
						<a href="images/dog/dog8.jpg"><img src="images/dog/dog8.jpg" width="100%" alt="dog image number 8" class="img-rounded"></a>
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-md-3">
					<div class="thumbnail">
						<a href="images/dog/dog9.jpg"><img src="images/dog/dog9.jpg" width="100%" alt="dog image number 9" class="img-rounded"></a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="thumbnail">
						<a href="images/dog/dog10.jpg"><img src="images/dog/dog10.jpg" width="100%" alt="dog image number 10" class="img-rounded"></a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="thumbnail">
						<a href="images/dog/dog11.jpg"><img src="images/dog/dog11.jpg" width="100%" alt="dog image number 11" class="img-rounded"></a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="thumbnail">
						<a href="images/dog/dog12.jpg"><img src="images/dog/dog12.jpg" width="100%" alt="dog image number 12" class="img-rounded"></a>
					</div>
				</div>
			</div>
	</div>
	<?php include 'footer.php';?>
</body>
</html>