<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Happy Login</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
  </head>
  <body>

    <form action="welcomeUser.php" method="POST">
    <div class="imgcontainer">
      <img src="Avtarjpg.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Email ID</b></label>
      <input type="text" placeholder="Enter Email ID" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button type="submit">Login</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <span class="psw"><a href="Register.html">New user?</a></span>

    </div>
  </form>

  </body>

</html>
