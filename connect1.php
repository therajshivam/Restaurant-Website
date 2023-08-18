<?php
$servername="localhost";
$username="root";
$password="";
$database_name="food";

$conn=mysqli_connect($servername,$username,$password,$database_name);

if(!$conn)
{
    die("Connection Failed:".mysqli_connect_error());
}

if(isset($_POST['save']))
{
    $First_Name = $_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $Email = $_POST['Email'];
    $Subject = $_POST['Subject'];
    $Message = $_POST['Message'];
    
    $sql_query = "INSERT INTO contact(First_Name,Last_Name,Email,Subject,Message)
    Values('$First_Name','$Last_Name','$Email','$Subject','$Message')";

    if(mysqli_query($conn, $sql_query))
    {
         echo "Send Successfully";
    }
    else
    {
        echo "Error: ".$sql."".mysqli_error($conn);
    }
    mysqli_close($conn); 
}
?>