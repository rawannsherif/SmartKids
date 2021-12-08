<html>
<title>Display Messages</title>
<head>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

  <div style="height : 60px"></div>
  <?php
  include("DB.php");
  ?>
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
    echo "<a class='navbar-brand' href='User.php'>Smart<span>kids</span></a>";
    echo "</div>";
    echo "<div class='collapse navbar-collapse' id='myNavbar'>";
    echo "<ul class='nav navbar-nav navbar-right'>";
    echo "<li><a href='User.php'>Home</a></li>";
    echo "<li><a href='SendMessages.php'>Send Messages</a></li>";
    echo "<li><a href='Help.php'>Help</a></li>";
    echo "<li><a href='Signout.php'>Sign Out</a></li>";
    echo "</ul>";
    echo "</div>";
    echo "</div>";
    echo "</nav>";
  }
  ?>
  <?php
  $sid = $_SESSION['id'];
  $sql = "SELECT * FROM dmessage where sid='$sid' OR rid='$sid'";
  $result = mysqli_query($connection, $sql);
  echo "<table class = 'table'>
    <tr>
    <th>Sender Id</th>
    <th>Receiver Id</th>
    <th>Message</th>
    </tr>";

  while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['sid'] . "</td>";
    echo "<td>" . $row['rid'] . "</td>";
    echo "<td>" . $row['message'] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
  ?>
</body>

</html>