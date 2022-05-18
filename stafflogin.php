<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Staff</title>
  <link rel="stylesheet" href="studentlogin.css">

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
    <p>College for Engineers</p>



    <div class="header-right"></div>

    <a style="margin-left:15%;" href="student.php">Home</a>
    <a href="about.php">About</a>
    <a href="contact.php">Contact</a>
    <a href="logout.php">Logout</a>
    <a style="color:white;  float:right; background-color:red; opacity:0.6; padding: 0.5px;" href="Report.php">Report a bug</a>
</div>
    <marquee style="color: black;float:right;font-weight: bolder;">
      UserName: <span style="color: red;"><?php echo $_SESSION['email']; ?>&emsp;</span>
      Name: <span style="color: red;"><?php echo $_SESSION['name']; ?>&emsp;</span>
      Login Time : <span style="color: red;" id="demo"></span>
    </marquee>
    <script>
      const d = new Date();
      document.getElementById("demo").innerHTML = d;
    </script>
    <br><br><br><br><br>
<div class="header">
    <div class="img-with-text">
      <img style="margin-left:40%; width: 250px;height:250px;" src="search.png" usemap="#Search">
     <br><br><br><br><br><br><br><br>
      <a style="float:left;margin-left:45%;" href="search.php">Search Student</a>
    

      <map name="Search">
        <area shape="circle" coords="100,100,150" alt="" href="search.php">
      </map>

      </div>
  </div>
</body>

</html>