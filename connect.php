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
// $_POST['username'] in this username is the name in input statement in html file 

$username = $_POST['username'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = " insert into sdpuserdata (username, email, mobile, comment) values ('$username', '$email', '$mobile', '$comment') ";
// in the above query first bracket contains variables created in database tables and second bracket contains variables created in php

mysqli_query($con, $query);

echo "$query";

header("location: index.php");

?>