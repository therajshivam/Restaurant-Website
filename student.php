<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Free Web tutorials">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="HTML, CSS, JavaScript,PHP,SQL">
    <title>College for Engineers</title>
    <link rel="stylesheet" href="staff.css">

</head>

<body>
    <img class="bg" src="bg.jpg" alt="">
    <div class="header">
        <img src="logo.jpg" alt="CE">
        <p>College for Engineers</p>



        <div class="header-right"></div>
        <a style="margin-left:15%;"  href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        <a href="staff.php">Staff Login</a>
        <a style="color:white;  float:right; background-color:red; opacity:0.6; padding: 0.5px;" href="Report.php">Report a bug</a>
        
    </div>

    <div>
        <h1 style="
        text-align: center;
        color: red;">Student Login</h1>
    </div>

    <form action="" method="POST">
        <div>
            <label for="UserId">User Id</label>
            <input type="text" id="user" name="email" placeholder="Username" autofocus required />
            <span></span>
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name=" password" placeholder="Password" required />
            <span></span>
        </div>
        <br>
        <input style="width:190px; margin-left:125px;" type="Submit" name="submit">

    </form><br>
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    <?php
    session_start();

    if (isset($_POST['submit'])) {
                $connection = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($connection, "fresherdb");
        $query = "select * from studentlogin  where email ='$_POST[email]'";
        $query_run = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($query_run)) {
            if ($row['email'] == $_POST['email']) {
                if ($row['password'] == $_POST['password']) {
                    header("Location:studentlogin.php");
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['id'] = $row['id'];
                } else {
                    echo '<div>Wrong User Name/Password</div>';

                }
            } else{
                echo '<div>Wrong User Name/Password</div>';

             }
            } 
        }
    

    ?>
     
</body>

</html>