<?php
$id=$_GET['id'];
$conn=mysqli_connect("localhost","root","","data1") or die ("connection error");
$sql="DELETE FROM data WHERE id= {$id}";
$res=mysqli_query($conn,$sql) or die ("query error");
header("location: index.php");
?>