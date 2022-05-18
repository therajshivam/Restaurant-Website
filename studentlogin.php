<?php
session_start();
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "fresherdb");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Free Web tutorials">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="HTML, CSS, JavaScript,PHP,SQL">
    <title>College for Engineers</title>
    <link rel="stylesheet" href="studentlogin.css">

</head>

<body>
    <img class="bg" src="bg.jpg" alt="">
    <div class="header">
        <img src="logo.jpg" alt="CE">
        <p><b>College for Engineers</b></p>

        <div class="header-right"></div>

        <a style="margin-left:15%;" href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        <a href="logout.php">Logout</a>
        <a href="delete.php">Delete</a>

      
        <a style="color:white;  float:right; background-color:red; opacity:0.6; padding: 0.5px;" href="Report.php">Report a bug</a>


        <marquee style="color: black;float:right;font-weight: bolder;">
                      Login Time : <span style="color: red;" id="demo"></span>
            <br><br>
        </marquee>

        <script>
            const d = new Date();
            document.getElementById("demo").innerHTML = d;
        </script>


        <div id="left_side">
            <br><br> <br><br><br>


            <form action="" method="post">
                <table>
                    <tr>
                        <td>
                            <input style="padding:10px;font-weight:bolder;width:160px;text-align:center;" type="submit" name="Personal" value="Personal Details"><br><br><br>
                        </td>
                    </tr>



                    <tr>
                        <td>
                            <input style="padding:10px;font-weight:bolder;width:160px;text-align:center;" type="submit" name="Family" value="Family Details"><br><br><br>
                        </td>
                    </tr>



                    <tr>
                        <td>
                            <input style="padding:10px;font-weight:bolder;width:160px;text-align:center;" type="submit" name="Academic" value="Academic Details"><br><br><br>
                        </td>
                    </tr>





                    <tr>
                        <td>
                            <input style="padding:10px;font-weight:bolder;width:160px;text-align:center;" type="submit" name="Hostel" value="Hostel Details"><br><br><br>
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <input style="padding:10px;font-weight:bolder;width:160px;text-align:center;" type="submit" name="Medical" value="Medical Details"><br><br><br>
                        </td>
                    </tr>





                    <tr>
                        <td>
                            <input style="padding:10px;font-weight:bolder;width:160px;text-align:left;" type="submit" name="Miscellaneous" value="Miscellaneous Details"><br><br><br>
                        </td>
                    </tr>
                </table>
            </form>
        </div>

        <div id="right_side">
            <?php

            if (isset($_POST['Personal'])) {
                $query = "select * from studentlogin  where id ='$_SESSION[search]'";
                $query_run = mysqli_query($connection, $query);
                while ($row = mysqli_fetch_assoc($query_run)) {
            ?>
                    <form action="editall.php" method="POST">
                        <table>
                            <tr>
                                <td>
                                     <b style="margin-left: 25px;"> Roll No : </b>
                                </td>
                                <td>
                                    <input style="font-weight: bolder; border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="id" type="text" value="<?php echo $row['id'] ?>" disabled>
                                </td>
                            </tr>




                            <tr>
                                <td>

                                    <b style="margin-left: 25px;"> Name : </b>
                                </td>
                                <td>

                                    <input style="font-weight: bolder;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="name"  type="text" value="<?php echo $row['name'] ?>" disabled>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <b style="margin-left: 25px;"> Stream : </b>
                                </td>
                                <td>

                                    <input style="font-weight: bolder;border-top-style: hidden;width:150%;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="stream"  type="text" value="<?php echo $row['stream'] ?>" disabled>
                                </td>
                            </tr>

                            <tr>
                                <td>

                                    <b style="margin-left: 25px;"> D O B : </b>
                                </td>
                                <td>
                                    <input style="font-weight: bolder;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="dob"  type="text" value="<?php echo $row['dob'] ?>" disabled>
                                </td>
                            </tr>
                            <td>

                                <tr>
                                    <td>

                                        <b style="margin-left: 25px;"> Gender : </b>
                                    </td>
                                    <td>
                                        <input style="font-weight: bolder;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="gender"  type="text" value="<?php echo $row['gender'] ?>" disabled>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <b style="margin-left: 25px;"> Religion : </b>
                                    </td>
                                    <td>
                                        <input style="font-weight: bolder;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="religion"  type="text" value="<?php echo $row['religion'] ?>" disabled>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <b style="margin-left: 25px;"> Caste : </b><br><br>
                                    </td>
                                    <td>
                                        <input style="font-weight: bolder;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="caste"  type="text" value="<?php echo $row['caste'] ?>" disabled><br><br>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <b style="margin-left: 25px;"> Email : </b>
                                    </td>
                                    <td>
                                        <input style="font-weight: bolder;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="email"  type="text" value="<?php echo $row['email'] ?>" disabled>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <b style="margin-left: 25px;"> Mobile Number : </b><br><br>
                                    </td>
                                    <td>
                                        <input style="font-weight: bolder;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="mobileno"  type="text" value="<?php echo $row['mobileno'] ?>" disabled><br><br>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <b style="margin-left: 25px;"> House Number : </b>
                                    </td>
                                    <td>
                                        <input style="font-weight: bolder;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="houseno"  type="text" value="<?php echo $row['houseno'] ?>" disabled>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <b style="margin-left: 25px;"> Street Name : </b>
                                    </td>
                                    <td>
                                        <input style="font-weight: bolder;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="street"  type="text" value="<?php echo $row['street'] ?>" disabled>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <b style="margin-left: 25px;"> Landmark : </b>
                                    </td>
                                    <td>
                                        <input style="font-weight: bolder;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="lankmark"  type="text" value="<?php echo $row['landmark'] ?>" disabled>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <b style="margin-left: 25px;"> City : </b>
                                    </td>
                                    <td>
                                        <input style="font-weight: bolder;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="city"  type="text" value="<?php echo $row['city'] ?>" disabled>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <b style="margin-left: 25px;"> District: </b>
                                    </td>
                                    <td>
                                        <input style="font-weight: bolder;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="district"  type="text" value="<?php echo $row['district'] ?>" disabled>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <b style="margin-left: 25px;"> State : </b>
                                    </td>
                                    <td>
                                        <input style="font-weight: bolder;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="state"  type="text" value="<?php echo $row['state'] ?>" disabled>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <b style="margin-left: 25px;"> Zipcode : </b>
                                    </td>
                                    <td>
                                        <input style="font-weight: bolder;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="zipcode"  type="text" value="<?php echo $row['zipcode'] ?>" disabled>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <b style="margin-left: 25px;"> Nationality : </b>
                                    </td>
                                    <td>
                                        <input style="font-weight: bolder;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="nationality"  type="text" value="<?php echo $row['nationality'] ?>" disabled>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <b style="margin-left: 25px;"> Goverment Id Name : </b>
                                    </td>
                                    <td>
                                        <input style="font-weight: bolder;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="govid"  type="text" value="<?php echo $row['govid'] ?>" disabled>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <b style="margin-left: 25px;"> Goverment Id Number : </b>
                                    </td>
                                    <td>
                                        <input style="font-weight: bolder;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="govnumber"  type="text" value="<?php echo $row['govnumber'] ?>" disabled>
                                    </td>
                                </tr>

                        <?php
                    }
                }
                        ?>

                        <?php

                        if (isset($_POST['Family'])) {
                            $query = "select * from studentlogin  where id ='$_SESSION[search]'";
                            $query_run = mysqli_query($connection, $query);
                            while ($row = mysqli_fetch_assoc($query_run)) {
                        ?>
                                <table>
                                    <tr>
                                        <td>
                                            <b style="margin-left: 25px;"> Father Name : </b>
                                        </td>
                                        <td>
                                            <input style="font-weight: bolder; border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="fathername"  type="text" value="<?php echo $row['fathername'] ?>" disabled>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <b style="margin-left: 25px;"> Father Occupation</b>
                                        </td>
                                        <td>
                                            <input style="font-weight: bolder;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="fatherocc" type="text" value="<?php echo $row['fatherocc'] ?>" disabled>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <b style="margin-left: 25px;"> Father Email : </b>
                                        </td>
                                        <td>
                                            <input style="font-weight: bolder;border-top-style: hidden;  ;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="fathermail"  type="text" value="<?php echo $row['fatheremail'] ?>" disabled>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <b style="margin-left: 25px;"> Father Mobile Number : </b><br><br>
                                        </td>
                                        <td>
                                            <input style="font-weight: bolder;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="fatherno"  type="text" value="<?php echo $row['fatherno'] ?>" disabled><br><br>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <b style="margin-left: 25px;"> Mother Name : </b>
                                        </td>
                                        <td>
                                            <input style="font-weight: bolder;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="mothername"  type="text" value="<?php echo $row['mothername'] ?>" disabled>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <b style="margin-left: 25px;"> Mother Occupation : </b>
                                        </td>
                                        <td>
                                            <input style="font-weight: bolder;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="motherocc"  type="text" value="<?php echo $row['motherocc'] ?>" disabled>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <b style="margin-left: 25px;"> Mother Email : </b>
                                        </td>
                                        <td>
                                            <input style="font-weight: bolder;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="mothermail"  type="text" value="<?php echo $row['motheremail'] ?>" disabled>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <b style="margin-left: 25px;"> Mother Mobile Number : </b><br><br>
                                        </td>
                                        <td>
                                            <input style="font-weight: bolder;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="motherno"  type="text" value="<?php echo $row['motherno'] ?>" disabled><br><br>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <b style="margin-left: 25px;"> Family Income : </b><br><br>
                                        </td>
                                        <td>
                                            <input style="font-weight: bolder;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="familyincome"  type="text" value="<?php echo $row['familyincome'] ?>" disabled><br><br>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <b style="margin-left: 25px;"> Goverment Id of Father : </b>
                                        </td>
                                        <td>
                                            <input style="font-weight: bolder;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="fathergovid"  type="text" value="<?php echo $row['fathergovid'] ?>" disabled>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <b style="margin-left: 25px;"> Goverment Id Number of Father : </b>
                                        </td>
                                        <td>
                                            <input style="font-weight: bolder;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="fathergovnumber"  type="text" value="<?php echo $row['fathergovnumber'] ?>" disabled>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <b style="margin-left: 25px;"> Goverment Id of Mother : </b>
                                        </td>
                                        <td>
                                            <input style="font-weight: bolder;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="mothergovid"  type="text" value="<?php echo $row['mothergovid'] ?>" disabled>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <b style="margin-left: 25px;"> Goverment Id Number of Mother : </b>
                                        </td>
                                        <td>

                                            <input style="font-weight: bolder;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="mothergovnumber"  type="text" value="<?php echo $row['mothergovnumber'] ?>" disabled>
                                            

                                        </td>
                                    </tr>
                            <?php

                            }
                        }
                            ?>


                            <?php

                            if (isset($_POST['Academic'])) {
                                $query = "select * from studentlogin  where id ='$_SESSION[search]'";
                                $query_run = mysqli_query($connection, $query);
                                while ($row = mysqli_fetch_assoc($query_run)) {
                            ?>

                                    <table>
                                        <tr>
                                            <td>
                                                <b style="margin-left: 25px;"> High School Name: </b>
                                            </td>
                                            <td>
                                                <input style="font-weight: bolder; border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="hscname" type="text" value="<?php echo $row['hscname'] ?>" disabled>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <b style="margin-left: 25px;"> High School Board: </b>
                                            </td>
                                            <td>

                                                <input style="font-weight: bolder;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="hsboard" type="text" value="<?php echo $row['hsboard'] ?>" disabled>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <b style="margin-left: 25px;"> School Address: </b>
                                            </td>
                                            <td>
                                                <input style="font-weight: bolder;border-top-style: hidden;width:200%;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;"name="hsadd"  type="text" value="<?php echo $row['hsadd'] ?>" disabled>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <b style="margin-left: 25px;"> Obtained Marks: </b>
                                            </td>
                                            <td>
                                                <input style="font-weight: bolder;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="hsobtmarks"  type="text" value="<?php echo $row['hsobtmarks'] ?>" disabled>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <b style="margin-left: 25px;"> Total Marks : </b>
                                            </td>
                                            <td>
                                                <input style="font-weight: bolder;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="hstotmarks"  type="text" value="<?php echo $row['hstotmarks'] ?>" disabled>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <b style="margin-left: 25px;"> High School Roll Number : </b>
                                            </td>
                                            <td>
                                                <input style="font-weight: bolder;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="hsrno"  type="text" value="<?php echo $row['hsrno'] ?>" disabled>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <b style="margin-left: 25px;"> Intermediate School Name : </b>
                                            </td>
                                            <td>
                                                <input style="font-weight: bolder;border-top-style: hidden;width:200%;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;"  name="isname"  type="text" value="<?php echo $row['isname'] ?>" disabled>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <b style="margin-left: 25px;"> Intermediate Board: </b>
                                            </td>
                                            <td>

                                                <input style="font-weight: bolder;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="iboard"  type="text" value="<?php echo $row['iboard'] ?>" disabled>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <b style="margin-left: 25px;"> Intermediate School Address : </b><br><br>
                                            </td>
                                            <td>
                                                <input style="font-weight: bolder;border-top-style: hidden;width:150%;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="isadd" type="text" value="<?php echo $row['isadd'] ?>" disabled><br><br>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <b style="margin-left: 25px;"> Obtained Marks : </b>
                                            </td>
                                            <td>
                                                <input style="font-weight: bolder;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="iobtmarks"  type="text" value="<?php echo $row['iobtmarks'] ?>" disabled>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <b style="margin-left: 25px;"> Total Marks : </b><br><br>
                                            </td>
                                            <td>
                                                <input style="font-weight: bolder;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="itotmarks" type="text" value="<?php echo $row['itotmarks'] ?>" disabled><br><br>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <b style="margin-left: 25px;"> Roll Number : </b><br><br>
                                            </td>
                                            <td>
                                                <input style="font-weight: bolder;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="irno" type="text" value="<?php echo $row['irno'] ?>" disabled><br><br>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <b style="margin-left: 25px;"> JEE Mains Percentile </b>
                                            </td>
                                            <td>
                                                <input style="font-weight: bolder;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="jeemarks"  type="text" value="<?php echo $row['jeemarks'] ?>" disabled>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <b style="margin-left: 25px;"> Application Id : </b>
                                            </td>
                                            <td>
                                                <input style="font-weight: bolder;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="appid"  type="text" value="<?php echo $row['appid'] ?>" disabled>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <b style="margin-left: 25px;"> Total Percentile : </b>
                                            </td>
                                            <td>
                                                <input style="font-weight: bolder;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="totper"  type="text" value="<?php echo $row['totper'] ?>" disabled>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <b style="margin-left: 25px;"> All India Rank </b>
                                            </td>
                                            <td>
                                                <input style="font-weight: bolder;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="air"  type="text" value="<?php echo $row['air'] ?>" disabled>
                                            </td>
                                        </tr>

                                <?php
                                }
                            }
                                ?>
                                <?php

                                if (isset($_POST['Hostel'])) {
                                    $query = "select * from studentlogin  where id ='$_SESSION[search]'";
                                    $query_run = mysqli_query($connection, $query);
                                    while ($row = mysqli_fetch_assoc($query_run)) {
                                ?>
                                        <table>
                                            <tr>
                                                <td>
                                                    <b style="margin-left: 25px;"> Hostel Number: </b>
                                                </td>
                                                <td>
                                                    <input style="font-weight: bolder; border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="hostelno"  type="text" value="<?php echo $row['hostelno'] ?>" disabled>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>

                                                    <b style="margin-left: 25px;"> Room Number : </b>
                                                </td>
                                                <td>
                                                    <input style="font-weight: bolder;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="roomno"  type="text" value="<?php echo $row['roomno'] ?>" disabled>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <b style="margin-left: 25px;"> No of Roomates : </b>
                                                </td>
                                                <td>
                                                    <input style="font-weight: bolder;border-top-style: hidden;  ;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="noofroomates"  type="text" value="<?php echo $row['noofroomates'] ?>" disabled>
                                                </td>
                                            </tr>




                                    <?php
                                    }
                                }
                                    ?>
                                    <?php

                                    if (isset($_POST['Medical'])) {
                                        $query = "select * from studentlogin  where id ='$_SESSION[search]'";
                                        $query_run = mysqli_query($connection, $query);
                                        while ($row = mysqli_fetch_assoc($query_run)) {
                                    ?>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <b style="margin-left: 25px;"> Blood Group: </b>
                                                    </td>
                                                    <td>
                                                        <input style="font-weight: bolder; border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" name="bloodgroup" type="text" value="<?php echo $row['bloodgroup'] ?>" disabled>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <b style="margin-left: 25px;"> Allergies : </b>
                                                    </td>
                                                    <td>
                                                        <input style="font-weight: bolder;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;"  name="allergies" type="text" value="<?php echo $row['allegies'] ?>" disabled>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <b style="margin-left: 25px;"> Drug Consuming Currently : </b>
                                                    </td>
                                                    <td>
                                                        <input style="font-weight: bolder;border-top-style: hidden;  ;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;"  name="drugcon" type="text" value="<?php echo $row['drugcon'] ?>" disabled>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <b style="margin-left: 25px;"> Diseases Dignosned in Last Year : </b>
                                                    </td>
                                                    <td>
                                                        <input style="font-weight: bolder;border-top-style: hidden;  ;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;"  name="diseaseslastyear" type="text" value="<?php echo $row['diseaseslastyear'] ?>" disabled>
                                                        <input style="margin-left: 40px; background-color:red;font-weight:bold;" type="submit" value="save" name="save">
                                                    </td>
                                                </tr>

                                        <?php
                                        }
                                    }
                                        ?>
                                        <?php

                                        if (isset($_POST['Miscellaneous'])) {
                                            $query = "select * from studentlogin  where id ='$_SESSION[search]'";
                                            $query_run = mysqli_query($connection, $query);
                                            while ($row = mysqli_fetch_assoc($query_run)) {
                                        ?>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <b style="margin-left: 25px;"> Hobbies : </b>
                                                        </td>
                                                        <td>
                                                            <input style="font-weight: bolder; border-top-style: hidden;width:90%;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;"  name="hobby" type="text" value="<?php echo $row['hobby'] ?>" disabled>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>
                                                            <b style="margin-left: 25px;"> Partication in any events(Level) : </b>
                                                        </td>
                                                        <td>
                                                            <input style="font-weight: bolder;border-top-style: hidden; width:90%;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;"  name="participation" type="text" value="<?php echo $row['participation'] ?>" disabled>
                                                        </td>
                                                    </tr>


                                            <?php

                                            }
                                        }
                                            ?>

                    </form>
        </div>

        <body>

</html>