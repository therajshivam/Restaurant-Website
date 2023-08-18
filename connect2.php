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

if(isset($_POST['save2']))
{
    $First_Name = $_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $Email = $_POST['Email'];
    $Table_Type = $_POST['Table_Type'];
    $Guest_Number = $_POST['Guest_Number'];
    $Placement = $_POST['Placement'];
    $Date = $_POST['Date'];
    $Time = $_POST['Time'];
    $Note = $_POST['Note'];

    $sql_query = "INSERT INTO booking(First_Name,Last_Name,Email,Table_Type,Guest_Number,Placement,Date,Time,Note)
    Values('$First_Name','$Last_Name','$Email','$Table_Type','$Guest_Number','$Placement','$Date','$Time','$Note')";

    if(mysqli_query($conn, $sql_query))
    {
         echo "Booked Successfully";
    }
    else
    {
        echo "Error: ".$sql."".mysqli_error($conn);
    }
    mysqli_close($conn); 
}
?>