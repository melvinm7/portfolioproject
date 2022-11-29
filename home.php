<?php

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>

<html>

<head>

    <title>Melvin Mathew</title>
    <link rel="icon" href="images/favicon.ico">
    <link rel="stylesheet" href="userlogin.css">

</head>

<body>

     <h1>Hello, <?php echo $_SESSION['user_name']; ?></h1>

     <h2 style="color: white;">This is a secret part of the website 😉</h2>

     <a href="logout.php">Logout</a>

     <a class="btn btn-light homepage-btn" href="index.html" role="button">back to homepage</a>

</body>

</html>

<?php

}else{

     header("Location: index.php");

     exit();

}

 ?>
