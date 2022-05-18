<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Free Web tutorials">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP, SQL">
    <title>College for Engineers</title>
    <link rel="stylesheet" href="search.css">

</head>
<?php
session_start();
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "fresherdb");
?>

<body>
    <img class="bg" src="bg.jpg" alt="">
    <div class="header">
        <img src="logo.jpg" alt="CE">
        <p><b>College for Engineers</b></p>


        <div class="header-right"></div>

        <a style="margin-left:15%;" href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        <a style="color:white;  float:right; background-color:red; opacity:0.6; padding: 0.5px;" href="Report.php">Report a bug</a>
    </div>
    <marquee style="color: black;float:right;font-weight: bolder;">
        UserName: <span style="color: red;"><?php echo $_SESSION['email']; ?></span>
        Name: <span style="color: red;"><?php echo $_SESSION['name']; ?></span>
        Login Time : <span style="color: red;" id="demo"></span>
    </marquee>
    <script>
        const d = new Date();
        document.getElementById("demo").innerHTML = d;
    </script>
    <br><br><br><br><br><br><br><br><br><br><br><br>
    <div></div>
    <form action="" method="post">
        <div style="text-align:center;">
            <strong style="color:red;text-align: center; font-size:30px;"> Student Unique Id:</strong>
            <input style=" width:250px ;color:white;border-radius: 4px;border: 2px solid black; background-color:#37576c;font-size:30px; width: 300px; height: 50px;  " type="text" name="search">
            <input style="border: 2px solid black;border-radius: 4px; font-size:30px; width: 120px; height: 56px; " type="submit" name="submit" class="submit">
            
    </form>

    <?php

    if (isset($_POST['submit'])) {

        $sql = "SELECT * FROM studentlogin WHERE id = '$_POST[search]'";

        $result = $connection->query($sql);

        $rowcount = mysqli_num_rows($result);
        echo $row['title'];
        if ($rowcount > 0) {
            header("Location:staff-student.php");
            echo $_SESSION['search'] = $_POST['search'];
             
   
        } else {
            echo '<br><br>&emsp;&emsp;&emsp;&emsp;&emsp;<b style="color:red;font-size:20px; background-color:white;opacity:0.6;">!!Wrong Student Id!!</b>';
        }
   
}
    ?>


</body>

</html>