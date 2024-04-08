<?php
//Connection to the user form
$con = mysqli_connect('localhost','root');
if($con){
	echo"Connection successful";
}else{
	echo"No connection";
}
//connection to database
mysqli_select_db($con,'universityuserdata');
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$query = "insert into userinfodata (user,email,mobile,comment) values ('$user','$email','$mobile','$comments')";
echo"$query";
mysqli_query($con,$query);

//header('location:index.php');


?>