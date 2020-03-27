<?php

$con = mysqli_connect("localhost", "root");
if($con){
    echo "Connection Successful";
}
else{
    echo "Connection Failed";
}

mysqli_select_db($con, "sdpproject");

// $username is only a variable  
// $_POST['username'] in this username is 

$username = $_POST['username'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = " insert into sdpuserdata (username, email, mobile, comment) values ('$username', '$email', '$mobile', '$comment') ";

mysqli_query($con, $query);

echo "$query";

// header("location: index.php");

?>