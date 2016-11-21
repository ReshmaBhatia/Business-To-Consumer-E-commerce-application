<?php
	$con = mysql_connect("localhost","root","");
	$db = mysql_select_db("vesit_sem1" , $con);
	
?>

<?php


	$name=$_POST['name'];
	$password=md5($_POST['pwd']);
	$birthday=$_POST['birthday'];
	$gender=$_POST['sex'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$q1=mysql_query("insert into users values('".$name."','".$password."','".$birthday."','".$gender."','".$address."','".$contact."','".$email."')") or die(mysql_error());
	echo "User Registerd";

?>