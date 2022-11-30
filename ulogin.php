<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "test_db";

mysql_connect($host,$user,$password);
mysql_select_db($db);

  if(isset($_POST['username'])){
    $uname=$_POST['username'];
    $password=$_POST['password'];

    $sql = "select * from loginform where user='".$uname."'AND pass='".$password."'
    limit 1";

    $result = mysql_query($sql);

    if(mysql_num_rows($result)==1){
      echo "You have successfully Logged in";
      exit();
    }else{
      echo "Incorrect Password";
      exit();
    }
  }
 ?>



<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1">
    <title>Melvin Mathew</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<link href="https://fonts.googleapis.com/css2?family=Chivo:wght@300;400;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
	</head>
	<body>

    <section id="title">
      <div class="container-fluid">

      <nav class="navbar navbar-expand-lg navbar-dark  ">
        <a class="navbar-brand" href="index.html">melvin mathew.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-bs-controls="navbarTogglerDemo01" aria-bs-expanded="false" aria-bs-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html#projects">projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html#about">about</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html#contact">contact</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-light" href="login.html" >login</a>
            </li>
          </ul>
        </div>
      </nav>



		<div class="login">
			<h1>Login</h1>
			<form action="#" method="post">
				<label for="username">
					<!-- font awesome icon -->
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<input type="submit" value="Login">
			</form>
		</div>
    </section>



</body>
</html>
