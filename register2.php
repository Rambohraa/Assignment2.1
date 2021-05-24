<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration Successfull</title>
  </head>
  <body>
    <div>
      <?php
        $email= $_POST['email'];
        $userpsw= $_POST['psw-confirm'];

        // Create connection
        $host="remotemysql.com";
        $port=3306;
        $socket="";
        $user="LtMVbJbdst";
        $password="EplfpV2Vjo";
        $databasename="LtMVbJbdst";
        $con = new mysqli($host, $user, $password, $databasename, $port, $socket);
        
        // Check connection
        if ($con->connect_error) {
          die("Connection failed: " . $con->connect_error);
        }
        else
        {
          $queryFire = $con->prepare("INSERT INTO loginTable(email,password) VALUES (?,?)");
          $queryFire->bind_param("ss",$email,$userpsw);
          if($queryFire->execute()==true){
            echo '<p>Registration Successfull</p>';
            echo '<p> Click here to <a href="index.php">Login</a></p>';
          } 
          else
              echo "Some Error occurred, Please try again";
          $con->close();
        }
      ?>

    </div>
  </body>
</html>
