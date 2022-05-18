<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fresherdb";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "DELETE FROM studentlogin WHERE id='$_SESSION[search]' ";

    if ($conn->query($sql) === TRUE) {
       header("Location: home.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }

?>