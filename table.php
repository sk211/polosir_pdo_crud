<?php 





$dsn = 'mysql:host=localhost;dbname=collage';
$user = "root";
$password= "";



$con = new PDO($dsn, $user, $password);
$con->query("create table teachers(id int(11) auto_increment primary key,
	name varchar(30) not null,
	email varchar(30)
	)
	");