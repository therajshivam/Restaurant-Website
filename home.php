<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Free Web tutorials">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="HTML, CSS, JavaScript,PHP,SQL">
  <title>College for Engineers</title>
  <link rel="stylesheet" href="home.css">

</head>

<body>
  <img class="bg" src="bg.jpg" alt="">
  <div class="header">
    <img src="logo.jpg" alt="CE">
    <p><b>College for Engineers</b></p>




    <div class="header-right"></div>

    <a style="margin-left:15%;" href=""></a>
    <a href="about.php">About</a>
    <a href="contact.php">Contact</a>
    <a style="color:white;  float:right; background-color:red; opacity:0.6; padding: 0.5px;" href="Report.php">Report a bug</a>
   
    <br><br><br><br><br><br><br>


    <div class="img-with-text">

      <img style="margin-left:12%; width: 250px;height:250px;" src="student.png" usemap="#Student">
      <img style="margin-left:25%; height:250px;" src="staff.png" usemap="#Staff"><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <a style="float:left;margin-left:17%;" href="student.php">Student Login</a>
      <a style="float:left;margin-left:40%;" href="staff.php">Staff Login</a>

      <map name="Student">
        <area shape="rect" coords="25,1,230,1000" alt="" href="student.php">
      </map>

      <map name="Staff">
        <area shape="rect" coords="25,1,280,1000" alt="" href="staff.php">
      </map>
    </div>

  </div>

</body>

</html>