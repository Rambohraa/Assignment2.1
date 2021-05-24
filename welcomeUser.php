<html>
<head>
  <title>Login</title>
</head>
<body>
  
</body>
  <?php
    $email= $_POST['email'];
    $userpsw= $_POST['psw'];
    $host="remotemysql.com";
    $port=3306;
    $socket="";
    $user="LtMVbJbdst";
    $password="EplfpV2Vjo";
    $databasename="LtMVbJbdst";
    $con = new mysqli($host, $user, $password, $databasename, $port, $socket);
    // Create connection
    
    // Check connection
    if ($con->connect_error) {
      die("Connection failed: " . $con->connect_error);
    }
    else
    {
      $feedbackData = $con->query("SELECT password FROM loginTable where email='$email'");
      $rowFetch=$feedbackData->fetch_assoc();
      if($rowFetch['password']==$userpsw)
      {
        echo "Username-".' '.$email;
        echo "<p>User Logged-in successfully</p>";
        echo '<a href="index.php">Logout</a>';
      }
      else
        echo "<p>Invalid Password</p>";
      $con->close();
    }
  ?>
</html>
