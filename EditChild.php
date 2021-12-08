
<!DOCTYPE html>
<html>
<head>
<title>Edit Child</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Child</title>
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
if(!empty($_SESSION['id'])){
 echo"<nav class='navbar navbar-default navbar-fixed-top'>";
    echo"<div class='container'>";
      echo"<div class='navbar-header'>";
        echo"<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>";
          echo"<span class='icon-bar'></span>";
          echo"<span class='icon-bar'></span>";
          echo"<span class='icon-bar'></span>";
        echo"</button>";
        echo"<a class='navbar-brand' href='Admin.php'>Smart<span>kids</span></a>";
      echo"</div>";
      echo"<div class='collapse navbar-collapse' id='myNavbar'>";
        echo"<ul class='nav navbar-nav navbar-right'>";
          echo"<li><a href='DisplaytB.php'>Users</a></li>";
          echo"<li><a href='Help.php'>Help</a></li>";
          echo"<li><a href='Chat2.php'>Send Message</a></li>";
          echo"<li><a href='DisplayMs.php'>Messages</a></li>";
          echo"<li><a href='Signout.php'>Sign Out</a></li>";
        echo"</ul>";
      echo"</div>";
    echo"</div>";
  echo"</nav>";
}
?>
<div class="banner-text text-center">
            <div class="text-border">
              <h2 class="text-decp">Nursery Edit Page</h2>
            </div>
            </div>
            <br>
<form action="#" method="post" id="regForm" class="contactForm">
					
<input type="text"  class="form-control" name= 'name' placeholder='name' required="">
<br>
<input type="text"class="form-control" name= 'password' placeholder='password' required="">
<br>    
<input type="text" class="form-control" name= 'address' placeholder='address' required="">
<br>
<input type="text" class="form-control" name= 'Phonenumber' placeholder='Phonenumber' required="">
<br>
<input type="date"  class="form-control" name= 'interviewdate' placeholder='interviewdate'required="">
<br>
<br>
<input type="time" class="form-control"  name= 'time' placeholder='time'required="">
<br>				
<input type="submit" class="form contact-form-button light-form-button oswald light" value="SIGNUP"  id="butsave" name="Update">
				</form>
			
		</div>
		
</body>

</html>


<?php
 $connection = mysqli_connect('localhost','root','','nursery');
//valdition lel date lw mkan bl time mwgood fl database XD 
if(isset($_POST['Update']))
{
    $update=$_POST['Update'];
    $name= $_POST['name'];
    $password= $_POST['password'];
    $address= $_POST['address'];
    $interview= $_POST['interviewdate'];
    $time=$_POST['time'];
    $ofa7=$interview." ".$time;
    $phone= $_POST['Phonenumber'];
   // $changeemail=mysqli_query($connection,"select * from users where mail='$mail'" );
$ehyaba=mysqli_query($connection,"select *from users where intreviewdate='$ofa7'");
/*
    if (mysqli_num_rows($changeemail)>0)
   { $what = "Please change Your email";
       echo "<script type='text/javascript'>alert('$what');</script>";
      $connection->close();
   }
   else{
   */
  if(mysqli_num_rows($ehyaba)>0)
  {
      $soo="Please change the interview time";
      echo "<script type='text/javascript'>alert('$soo');</script>";
      $connection->close();
  }else{
  
   $id= $_GET['id'];
    $sql="UPDATE `users` SET 
    `name`='$name',
    `password`='$password',
    `Phonenumber`='$phone',
    `intreviewdate`='$ofa7',
    `Address`='$address'
     WHERE id='$id'";
     
     $result=mysqli_query($connection,$sql);
  }
   //}



}
?>











