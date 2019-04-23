<?php 

if(isset($_POST) && isset($_POST['email'])){

	$name =$_POST['name'];
	$email =$_POST['email'];
	$con = new PDO('mysql:host=localhost;dbname=collage', 'root', '');
	$statment = $con->prepare("insert into teachers(name, email) values(:name, :email)");
	$statment->execute([
		':name' => $name,
		':email'=> $email
	]);
}





 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php crud</title>
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-nav">
			<ul class="navbar-nav">
				<li class="nev-item">
					<a href="/" class="nav-link">Home</a>
				</li>
				<li class="nav-item">
					<a href="create.php" class="nav-link">Create</a>
				</li>
			</ul>
		</nav>
	</div>
	
	<div class="container">
		<div class="card col-md-5 offset-4 mt-5 shadow ">
			<h2 class="card-header">
				Add a new teacer
			</h2>
			<div class="card-body">
				<form action="" method="post">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" id="name" name="name" class="form-control">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" id="emamil" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" value="Add a teacher" class=" btn btn-primary">
					</div>
				</form>

			</div>
		</div>
	</div>
</body>
</html>