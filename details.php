<?php include('action.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>Advance CRUD Application</title>

	<!--Bootstrap CDN----->

	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
	
	<script type="text/javascript" src="bootstrap-4.4.1/js/jaquery_latest.js"></script>

	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>

	<!---Font Awesome------>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"></script>

	
	
</head>

<body>

	

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">CRUD App</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Features<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">About</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6 mt-3 bg-info p-4 rounded">
			<h2 class="bg-light p-2 rounded text-center text-dark">ID :<?php echo $vid; ?></h2>
			<div class="text-center">
				<img src="<?php echo $vphoto; ?>" width="300" class="img-thumbnail">
			</div>
			<h4 class="text-light">Name:<?php echo $vname; ?></h4>
			<h4 class="text-light">Email:<?php echo $vemail; ?></h4>
			<h4 class="text-light">Phone:<?php echo $vphone; ?></h4>
			
		</div>
	</div>
</div>

	
	
</body>

</html>