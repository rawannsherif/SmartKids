<html>

<head>
</head>

<body>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Send Messages</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">



  </head>

  <body>
    <?php include('DB.php') ?>
    <?php
    session_start();
    if (!empty($_SESSION['id']) && isset($_POST['sendm'])) {
      $what = "Please change the recievers id";
      $sid = $_SESSION['id'];
      $rid = $_POST['rid'];
      $message = $_POST['messages'];
      $changeid = mysqli_query($connection, "select * from users where id='$rid'");
      $sql = "INSERT INTO `dmessage`(`sid`,`rid`, `message`) VALUES ('$sid','$rid','$message')";
      if (mysqli_num_rows($changeid) > 0) {
        $dd = mysqli_query($connection, $sql);
        if ($id == 1)
          header("location:Admin.php");
        else if ($id == 10)
          header("location:Manager.php");
        else
          header("location:User.php");
      } else {
        echo "<script type='text/javascript'>alert('$what');</script>";
        $connection->close();
      }
    }

    ?>
    <?php
    session_start();
    $s = $_SESSION['id'];
    if ($s == 1) {
      echo "<nav class='navbar navbar-default navbar-fixed-top'>";
      echo "<div class='container'>";
      echo "<div class='navbar-header'>";
      echo "<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>";
      echo "<span class='icon-bar'></span>";
      echo "<span class='icon-bar'></span>";
      echo "<span class='icon-bar'></span>";
      echo "</button>";
      echo "<a class='navbar-brand' href='Admin.php'>Smart<span>kids</span></a>";
      echo "</div>";
      echo "<div class='collapse navbar-collapse' id='myNavbar'>";
      echo "<ul class='nav navbar-nav navbar-right'>";
      echo "<li><a href='Admin.php'>Home</a></li>";
      echo "<li><a href='DisplaytB.php'>Users</a></li>";
      echo "<li><a href='DisplayMessages.php'>View Messages</a></li>";
      echo "<li><a href='Help.php'>Help</a></li>";
      echo "<li><a href='Signout.php'>Sign Out</a></li>";
      echo "</ul>";
      echo "</div>";
      echo "</div>";
      echo "</nav>";
    } else if ($s == 10) {
      echo "<nav class='navbar navbar-default navbar-fixed-top'>";
      echo "<div class='container'>";
      echo "<div class='navbar-header'>";
      echo "<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>";
      echo "<span class='icon-bar'></span>";
      echo "<span class='icon-bar'></span>";
      echo "<span class='icon-bar'></span>";
      echo "</button>";
      echo "<a class='navbar-brand' href='Manager.php'>Smart<span>kids</span></a>";
      echo "</div>";
      echo "<div class='collapse navbar-collapse' id='myNavbar'>";
      echo "<ul class='nav navbar-nav navbar-right'>";
      echo "<li><a href='Manager.php'>Home</a></li>";
      echo "<li><a href='DisplayMessages.php'>View Messages</a></li>";
      echo "<li><a href='Help.php'>Help</a></li>";
      echo "<li><a href='Signout.php'>Sign Out</a></li>";
      echo "</ul>";
      echo "</div>";
      echo "</div>";
      echo "</nav>";
    } else {
      echo "<nav class='navbar navbar-default navbar-fixed-top'>";
      echo "<div class='container'>";
      echo "<div class='navbar-header'>";
      echo "<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>";
      echo "<span class='icon-bar'></span>";
      echo "<span class='icon-bar'></span>";
      echo "<span class='icon-bar'></span>";
      echo "</button>";
      echo "<a class='navbar-brand' href='User.php'>Smart<span>kids</span></a>";
      echo "</div>";
      echo "<div class='collapse navbar-collapse' id='myNavbar'>";
      echo "<ul class='nav navbar-nav navbar-right'>";
      echo "<li><a href='User.php'>Home</a></li>";
      echo "<li><a href='DisplayMessages.php'>View Messages</a></li>";
      echo "<li><a href='Help.php'>Help</a></li>";
      echo "<li><a href='Signout.php'>Sign Out</a></li>";
      echo "</ul>";
      echo "</div>";
      echo "</div>";
      echo "</nav>";
    }
    ?>

    <section id="contact" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Send Message</h2>
            <hr class="bottom-line">
          </div>
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-group">
              <input type="text" class="form-control" name="rid" placeholder="Reciever Id">
            </div>
            <textarea class="form-control" name="messages" placeholder="Message"></textarea>
        </div>
      </div>
      <div class="col-xs-12">
        <!-- Button -->
        <button type="submit" id="submit" name="sendm" class="light-form-button">SEND MESSAGE</button>

      </div>
      </form>
      </div>
    </section>
  </body>

</html>