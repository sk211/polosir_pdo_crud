<?php 

$id = $_GET['id'];


$con = new PDO('mysql:host=localhost; dbname=collage', 'root', '');

$statement =$con->prepare('select * from teachers where id =:id');
$statement->execute([

':id'=>$id
]);

$teacher = $statement->fetch(PDO::FETCH_OBJ);




if(isset($_POST) && isset($_POST['email'])){

	$name =$_POST['name'];
	$email =$_POST['email'];
	$statement = $con->prepare("update teachers set name=:name, email=:email where id= :id");

	$statement -> execute([

		':name' => $name,
		':email' => $email,
		':id' => $id
	]);

	header('location: /');




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
				Update teacer
			</h2>
			<div class="card-body">
				<form action="" method="post">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" value="<?= $teacher->name; ?>"	id="name" name="name" class="form-control">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" value="<?= $teacher->email; ?>" name="email" id="emamil" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" value="update teacher" class=" btn btn-primary">
					</div>
				</form>

			</div>
		</div>
	</div>
</body>
</html>