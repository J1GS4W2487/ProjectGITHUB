<!DOCTYPE html>
<html>
<head>

	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
</head>
<body>

<?php include 'menu.php'; ?>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/r1.jpg"  width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/r2.jpg"  width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/r3.jpg"  width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">ABOUT US</h2>
	</div>
	<div>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-12">
			<img src="images/r4.jpg" class="img-fluid aboutimg"  >
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<h2 class="display-14">WE ARE BLUE BREEZE !</h2>
			<p class="py-1" style="font-family:'Courier New'">At BLUE BREEZE, you'll make memories that will be remembered for a lifetime.
			With Luxorious Rooms and a Global Cuisine, we are a complete solution for your vacation needs. To expereince Ambience and Luxury at its best, we have perfectly designed rooms and also provide a world-class service for you and your family. 
			So, for the best vacation ever, choose our Paradise!  </p>
			<a href="about.php" class="btn btn-success"> Details </a>
		</div>
		</div>
		
	</div>
</section>
<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">OUR SERVICES</h2>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="card" style="width:400px ">
  <img class="card-img-top" src="images/r5.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Sauna</h4>
    <p class="card-text">Steamy Swedish Baths</p>
  </div>
</div>
<div class="card" style="width:400px">
  <img class="card-img-top" src="images/r6.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Infinite Pools</h4>
    <p class="card-text">Blue is the Colour</p>
    
  </div>
</div><div class="card" style="width:400px">
  <img class="card-img-top" src="images/r7.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Spas</h4>
    <p class="card-text">Replenish and Rejuvinate</p>
  </div>
</div>
<div class="card" style="width:400px">
  <img class="card-img-top" src="images/r98.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Clubs</h4>
    <p class="card-text">Dance to the Music</p>
  </div>
</div><div class="card" style="width:400px">
  <img class="card-img-top" src="images/r10.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beach</h4>
    <p class="card-text"> Relax by the Beach</p>
  </div>
</div><div class="card" style="width:400px">
  <img class="card-img-top" src="images/r9.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Global Cuisine</h4>
    <p class="card-text"> Worldwide</p>
   
  </div>
</div>
</div>
		

	</div>
</section>

<section class="my-5">
	<div class="py-5">
	<h2 class="text-center">Contact Us</h2>
	</div>
	<div class="w-50 m-auto">
		<form action="userinfo.php" method="post">
			<div class="form-group">
				<label>Full Name</label>
				<input type="text" name="user" autocomplete="off" class="form-control">
			</div>

			
			<div class="form-group">
				<label>Email-ID</label>
				<input type="email" name="email" autocomplete="off" class="form-control">
			</div>

			<div class="form-group">
				<label>Mobile</label>
				<input type="number" name="mobile" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Location</label>
				<input type="text" name="city" autocomplete="off" class="form-control">
			</div>
			
			<div class="form-group">
				<label>Comments</label>
	<textarea name="comment"  class="w-100 m-auto">

  	
  </textarea>
  <br><br>

				<button type="submit" class="btn btn-success">Submit</button>
			</div>
		</form>
	</div>
	
</section>
<footer>
	<p class="p-4 bg-dark text-white text-center">@J1GS4W2487</p>
</footer>





	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>>