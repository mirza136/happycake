<?php
$username = "root";
$password = "";
$server = 'localhost';
$database ='afraaorders';


$con = mysqli_connect($server, $username, $password, $database);

if($con){
    echo "connection successful";
}
else{
    // echo "no connection";
    die("no connection" . mysqli_connect_error());
}

?>