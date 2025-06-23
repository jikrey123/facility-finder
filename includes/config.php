<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "facility_finder";
$connection = mysqli_connect($servername, $username, $password, $database);

if ($connection){
    echo "connection successful";
}
else{
    echo "connection failed";
}

?>