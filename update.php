<?php
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$msg=$_POST['msg'];
$conn=mysqli_connect("localhost","root","","data1") or die ("connection error");
$sql = "UPDATE data SET name='{$name}', email='{$email}', phone='{$phone}', msg='{$msg}' WHERE id= {$id}";
$res=mysqli_query($conn,$sql) or die ("query error");
header("location: index.php");
?>