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

<div class="container-fluid">
	<div class="row justify-content-center mt-2">
		<div col-md-10>
			<h3 class="text-center text-dark">Advanced CRUD App Using PHP & MYSQLi Prepared Statement(Object Oriented)</h3>

			<hr>

			<?php if(isset($_SESSION['response'])){ ?>

			<div class="alert alert-<?php echo $_SESSION['res_type']; ?> alert-dismissible text-center">
				<button type="button" class="close" data-dismiss="alert">&times;</button>

			<?php echo $_SESSION['response']; ?>

			</div>

		<?php } unset($_SESSION['response']); ?>

		</div>

	</div>



	<div class="row">
		<div class="col-md-4">
			<h3 class="text-center text-info">Add Record</h3>

			<form action="action.php" method="post" enctype="multipart/form-data">

				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<div class="form-group">
					<input type="text" name="name" value="<?php echo $name; ?>" placeholder="Enter Name" class="form-control" required>
				</div>

				<div class="form-group">
					<input type="email" name="email" value="<?php echo $email; ?>" placeholder="Enter E-mail" class="form-control" required>
				</div>

				<div class="form-group">
					<input type="tel" name="phone" value="<?php echo $phone; ?>" placeholder="Enter Phone No" class="form-control" required>
				</div>

				<div class="form-group">
					<input type="hidden" name="oldimage" value="<?php echo $photo; ?>">
					<input type="file" name="image" class="custom-file">
					<img src="<?php echo $photo; ?>" width="120" class="img-thumbnail">
				</div>

				<div class="form-group">
					<?php if($update==true){ ?>
					<input type="submit" name="update" class="btn btn-success btn-block" value="Update Record">

				<?php }else{ ?>

					<input type="submit" name="add" class="btn btn-primary btn-block" value="Add Record">

				<?php } ?>
				
				</div>
			</form>
			
		</div>

		<div class="col-md-8">

			<?php

			 $query="SELECT * FROM `crud`";

			 $stmt=$conn->prepare($query);

			 $stmt->execute();

			 $result=$stmt->get_result();


			?>

			<h3 class="text-center text-info">Records Present In The Database</h3>

<table class="table table-bordered table-hover">
  <thead class="text-center">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody class="text-center">

  	<?php while($row=$result->fetch_assoc()){ ?>
    <tr>
      <th><?php echo $row['id']; ?></th>
      <td><img src="<?php echo $row['photo']; ?>" width="25"></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['phone']; ?></td>
      <td>
      	<a href="details.php?details=<?php echo $row['id']; ?>" class="badge badge-info p-2">Details</a> |
      	<a href="action.php?delete=<?php echo $row['id']; ?>" class="badge badge-danger p-2" onclick="return confirm('Do you want to delete this record?');">Delete</a> |
      	<a href="index.php?edit=<?php echo $row['id']; ?>" class="badge badge-primary p-2">Edit</a>
      	
      </td>
    </tr>

<?php } ?>
    
  </tbody>
</table>
		</div>
		
	</div>
</div>

	
	
</body>

</html>