<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
  <?php
  session_start();
  if (!empty($_SESSION['id'])) {
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
    echo "<li><a href='SendMessages.php'>Send Messages</a></li>";
    echo "<li><a href='DisplayMessages.php'>View Messages</a></li>";
    echo "<li><a href='Help.php'>Help</a></li>";
    echo "<li><a href='Signout.php'>Sign Out</a></li>";
    echo "</ul>";
    echo "</div>";
    echo "</div>";
    echo "</nav>";
  }
  ?>
  <!--Navigation bar-->

  <!--/ Navigation bar-->
  <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog modal-sm">
    </div>
  </div>
  <!--/ Modal box-->
  <!--Banner-->
  <div class="banner">
    <div class="bg-color">
      <div class="container">
        <div class="row">
          <br>
          <br>
          <div class="banner-text text-center">
            <div class="text-border">
              <h2 class="text-dec"><?php echo "Welcome" . " " . $_SESSION['name']; ?></h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>