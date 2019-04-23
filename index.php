<?php 

$con = new PDO('mysql:host=localhost;dbname=collage', 'root', '');
$statment = $con->prepare('select * from teachers order by id desc');
$statment->execute();
$teachers = $statment->fetchAll(PDO::FETCH_OBJ);



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
		<div class="card col-md-10 offset-1 mt-5 shadow ">
			<h2 class="card-header text-center bg-dark text-light">
				All teacer
			</h2>
			<div class="card-body">
				<table class="table table-bordered">
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Action</th>
					</tr>
					<?php foreach($teachers as $teacher) : ?>
					<tr>
						<td><?= $teacher-> id; ?></td>
						<td><?= $teacher-> name ;?></td>
						<td><?= $teacher-> email;?></td>
						<td>
							<a class="btn btn-info" href="edit.php?id=<?= $teacher-> id ;?>">Edit</a>
							<a class="btn btn-warning" href="delete.php?id=<?= $teacher-> id ;?>">Delete</a>
						</td>
					</tr>
				<?php endforeach; ?>
				</table>

			</div>
		</div>
	</div>
</body>
</html>