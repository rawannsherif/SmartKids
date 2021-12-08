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
    echo "<a class='navbar-brand' href='Admin.php'>Smart<span>kids</span></a>";
    echo "</div>";
    echo "<div class='collapse navbar-collapse' id='myNavbar'>";
    echo "<ul class='nav navbar-nav navbar-right'>";
    echo "<li><a href='DisplaytB.php'>Show Users</a></li>";
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

      <!-- Modal content no 1-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center form-title">Login</h4>
        </div>
        <div class="modal-body padtrbl">

          <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <div class="form-group">
              <form name="" id="loginForm">
                <div class="form-group has-feedback">
                  <!----- username -------------->
                  <input class="form-control" placeholder="Username" id="loginid" type="text" autocomplete="off" />
                  <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span>
                  <!---Alredy exists  ! -->
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                  <!----- password -------------->
                  <input class="form-control" placeholder="Password" id="loginpsw" type="password" autocomplete="off" />
                  <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span>
                  <!---Alredy exists  ! -->
                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="checkbox icheck">
                      <label>
                        <input type="checkbox" id="loginrem"> Remember Me
                      </label>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <button type="button" class="btn btn-green btn-block btn-flat" onclick="userlogin()">Sign In</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

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