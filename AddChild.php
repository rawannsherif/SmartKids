<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Add Child</title>
    <link rel="stylesheet" href="Style.css">
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <script type="text/javascript">
        function ValidateDOB() {
            var lblError = document.getElementById("lblError");


            var dateString = document.getElementById("txtDate").value;
            var regex = /(((0|1)[0-9]|2[0-9]|3[0-1])\/(0[1-9]|1[0-2])\/((20|20)\d\d))$/;


            if (regex.test(dateString)) {
                var parts = dateString.split("/");
                var dtDOB = new Date(parts[0] + "/" + parts[1] + "/" + parts[2]);
                var dtCurrent = new Date();
                lblError.innerHTML = "Eligibility 5-7 years ONLY."
                if (dtCurrent.getFullYear() - dtDOB.getFullYear() < 5 || dtCurrent.getFullYear() - dtDOB.getFullYear() > 7) {
                    return false;
                }

                if (dtCurrent.getFullYear() - dtDOB.getFullYear() == 5) {


                    if (dtCurrent.getMonth() < dtDOB.getMonth()) {
                        return false;
                    }
                    if (dtCurrent.getMonth() == dtDOB.getMonth()) {

                        if (dtCurrent.getDate() < dtDOB.getDate()) {
                            return false;
                        }
                    }
                }
                lblError.innerHTML = "";
                return true;
            } else {
                lblError.innerHTML = "Enter date in dd/MM/yyyy format ONLY."
                return false;
            }
        }
    </script>


</head>

<body>


    <div class="main-w3layouts wrapper">
        <h1>Nursery (Add Child)</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form action="#" method="post" id="regForm">
                    <input type="text" name='name' placeholder="Child Name" required="">
                    <br>
                    <input placeholder='dd/MM/yyyy' type="text" name="DOB" id="txtDate" onblur="ValidateDOB()" required="">
                    <span class="error" id="lblError"></span>
                    <br>
                    <input type="text" name='address' placeholder='address' required="">
                    <input type="file" name="imageUpload" id="imageUpload" required="">
                    <input type="submit" name='Login' onclick="return ValidateDOB()">



            </div>

            </form>

        </div>
    </div>






    <?php include('DB.php'); ?>
    <?php
    session_start();
    $s = $_SESSION['id'];



    if (isset($_POST['Login'])) {

        $id = $_SESSION['id'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $DOB = $_POST['DOB'];

        $target_dir = "Childs/";
        $target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

        if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file)) {
            echo "The file " . basename($_FILES["imageUpload"]["name"]) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }

        $image = basename($_FILES["imageUpload"]["name"], ".jpg");


        $sql = "INSERT INTO `child`(`id`,`name`, `address`, `DOB`,`image`) VALUES ('$id','$name','$address','$DOB','$image')";
        $result = mysqli_query($connection, $sql);
    }

    /*while($row = mysql_fetch_row($result)) {
    echo "<tr>";
    echo "<td><img src='uploads/$row[6].jpg' height='150px' width='300px'></td>";
    echo "</tr>\n";
}*/
    ?>

</body>


</html>