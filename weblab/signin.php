  <html>
<head>

   <link href="style_signin.css" type="text/css" rel="stylesheet"/>

   <title>Sign in</title>
</head>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uyeler";



try {
    $db = new PDO("mysql:host=localhost;dbname=web", "root", "");
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // sql to create table
   

  //  echo "Table MyGuests created successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }



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

<div class="signbox">
   <form  action="kaydet.php" method="POST">
   <h1>Sign In</h1>
   <p>Name</p>
   <input type="text" name="name"placeholder="Enter name"></input>
   <p>Surname</p>
   <input type="text" name="surname"  placeholder="Enter surname"></input>
   <p>E-mail</p>
   <input type="text" name="email"  placeholder="Enter e-mail"></input>
   <p>Username</p>
   <input type="text" name="username"  placeholder="Choose an username"></input>
   <p>Password</p>
   <input type="password" name="password" placeholder="Enter password"></input>
   <input type="submit" name="submit" value="Sign in">
   <a href="login.php">Have an account? </a>
</form>

</div>
<div class="footer">
  <p>Footer</p>
</div>
</body>
</html>