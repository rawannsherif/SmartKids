<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link rel="stylesheet" href="Style.css">
  <link rel="shortcut icon" type="image/x-icon" href="nurse-512.png">
</head>

<body>


  <!--<script src="ProjectJs.js"></script>-->
  <div class="login-page">

    <div class="form">
      <!--<form class="register-form">
                    <input type="text" placeholder="name"/>
                    <input type="password" placeholder="password"/>
                    <input type="text" placeholder="email address"/>
                    <button>create</button>-->

      <!-- <p class="message">Already registered? <a href="#">Sign In</a></p>-->

      </form>
      <button type="submit" name='ofa7'>Remember me?</button>

      <form class="login-form" method="post">

        <input type="email" name='mail' placeholder="Email" />
        <input type="password" name='password' placeholder="Password" />
        <button type="submit" name='log'>login </button>
        <p class="message">Not registered? <a href="Registration.php">Create an account</a></p>
      </form>
    </div>
  </div>



  <?php include('DB.php') ?>

  <?php
  $message = "Please Check your email or password and tryagain!!";

  session_start();
  if (filter_has_var(INPUT_POST, 'mail')) {
    echo '';
  } else {
    echo '';
  }


  if (isset($_POST['log'])) {

    $passwords = $_POST['password'];
    $email = $_POST['mail'];
    if (isset($_POST['ofa7'])) {
      $passwords = $_POST['password'];
      $email = $_POST['mail'];
      setcookie('mail', $email, time() + 60 * 60 * 7);
      setcookie('password', $passwords, time() + 60 * 60 * 7);
    }
    $type = "Parent";
    $type1 = "Admin";
    $type2 = "Manger";
    $sql = "SELECT * from users where   mail ='$email'  AND  password ='$passwords' AND type='$type'";
    $sql1 = "SELECT * from users where   mail ='$email'  AND  password ='$passwords' AND type='$type1'";
    $sql2 = "SELECT * from users where mail='$email'AND password='$passwords' AND type='$type2'";
    $result = mysqli_query($connection, $sql);
    $result2 = mysqli_query($connection, $sql1);
    $result3 = mysqli_query($connection, $sql2);
    if ($row = mysqli_fetch_array($result)) {


      $_SESSION['id'] = $row[0];
      $_SESSION['name'] = $row['name'];
      header("Location:User.php");
    } else if ($row = mysqli_fetch_array($result2)) {

      $_SESSION['id'] = $row[0];
      $_SESSION['name'] = $row['name'];
      header("Location:admin.php");
    } else if ($row = mysqli_fetch_array($result3)) {




      $_SESSION['id'] = $row[0];
      $_SESSION['name'] = $row['name'];
      header("Location:Manager.php");
    } else {

      echo "<script type='text/javascript'>alert('$message');</script>";
    }
    $email = $_POST['mail'];
  }

  if (isset($_COOKIE['mail']) and isset($_COOKIE['password'])) {
    $email = $_COOKIE['mail'];
    $passwords = $_COOKIE['password'];
  }
  ?>

</body>

</html>