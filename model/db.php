<?php $host= "localhost";
$user= "root";
$password="raam@9222";
$db="blood_donation";

$con = new mysqli($host,$user,$password,$db);
if ($con) {
    // echo "connected";
}
else {
    echo "not connected".mysqli_error($con);
}