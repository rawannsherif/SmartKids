<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Table</title>
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
  $s = $_SESSION['id'];
  if (!empty($s)) {
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

  <div>
    <br>
    <br>
    <br>
  </div>


  <div id="page-wrapper">

    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="row">
        <div class="col-lg-12">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">password</th>
                <th scope="col">email</th>
                <!--<th scope="col">address</th>-->
                <th scope="col">Delete</th>
                <th scope="col">Edit</th>




              </tr>
            </thead>
            <tbody>






              <tr>
                <?php
                //displayyyyyyyyy 
                include("DB.php");


                $sql = "SELECT * FROM users";

                $result = mysqli_query($connection, $sql);


                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $password = $row['password'];
                    $email = $row['mail'];
                    $address = $row['Address'];

                    echo "<tr>
                    <th>{$id}</th>
                    <th>{$name}</th>
                    <th>{$password}</th>
                    <th>{$email}</th>
                   


                    <th><a href='Delete.php?id=$id'>Delete</a></th>
                    <th><a href='Edit.php?id=$id'>Edit</a></th>
                    </tr>";
                  }
                }
                ?>

              </tr>


            </tbody>
          </table>

</body>

</html>