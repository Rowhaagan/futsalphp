<?php

#start session
session_start();
#Dtatabase connection
include('../config/connection.php');

if($_POST){
  $query="SELECT * FROM users WHERE user_email = '$_POST[email]' AND user_password =SHA1('$_POST[password]')";
  $result=mysqli_query($conn, $query);

  if(mysqli_num_rows($result)==1){
      $_SESSION['username'] = $_POST['email'];
      header('Location: index.php');
  }
}

?>

<!DOCTYPE html>
  <head>
    <title>Manfootster | Admin Login</title>
    <?php include('config/css.php'); ?>
  </head>
  <body class=pagelogin>
    <div class="login-page">
  <div class="form">
    <?php

        if($_POST){
          echo $_POST['email'];
          echo '<br/>';
          echo $_POST['password'];
        }

    ?>
    <form class="login-form" role="form" action="login.php" method="post" >
      <input type="text" name="email" id="email" placeholder="Username"/>
      <input type="password" name="password" id="password" placeholder="Password"/>
      <button>login</button>
    </form>
  </div>
</div>
    <?php include('config/js.php'); ?>
  </body>
