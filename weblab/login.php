<html>
<head>
	
	<link href="style_login.css" type="text/css" rel="stylesheet"/>
</head>

<?php

/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uyeler";

try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE myDBPDO";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Database created successfully<br>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
*/

//burdan yukarı
/*
 $username = $password ="";
 
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = $_POST['username'];
      $password = $_POST['password']; 
      
      if ($username == 'm' && $password == 'g') {
         header("location:login.php");

      }else {
         echo "TRY AGAIN";
      } 
  }
     */
   
  ?>


<body>

<div class="topnav">
  <a class="navbar-brand" href="index.html">THRONE</a>
  <a href="#news">Lorem</a>
  <a href="#contact">Ipsum</a>
  <a href='login.html'>Login</a>
  <input type="text" placeholder="Search..">
   <button type="submit" class="searchButton">
        <i class="fa fa-search"></i>
     </button>     
</div>

	<div class="loginbox">
		<img class="avatar" src="avatar.jpg">
		<h1>Login Here</h1>
		<form action="db2.php" method="POST">
			<p>Username</p>
			<input type="text" name="username" placeholder="Enter Username">
			<p>Password</p>
			<input type="Password" name="password"  placeholder="Enter Password">
			<input type="submit" name="" value="Login">
			<a href="#">Lost your password?</a><br>
			<a href="signin.php">Don't have an account?</a>
		</form>
	</div>


</body>
</html>