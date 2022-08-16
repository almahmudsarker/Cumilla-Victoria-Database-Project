<?php $servername = "localhost";
$username = "root";
$password = "";
$dbname = "college_managment_system";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn) {
    // echo "Database is connected.";
    // echo '<script type="text/javascript";';
    // echo 'alert("database is connected");';
    // echo '</script>';
} else {
    die("database connection failed." . mysqli_connect_error());
}
