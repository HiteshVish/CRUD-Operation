<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$msg=$_POST['msg'];
$conn=mysqli_connect("localhost","root","","data1") or die ("connection error");
$sql="INSERT INTO data(name,email,phone,msg) VALUE ('$name','$email','$phone','$msg')"; 
$res=mysqli_query($conn,$sql) or die ("query error");
header("location: index.php");
?>