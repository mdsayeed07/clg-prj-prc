<?php 
function siteTitle()
{	
	$con = new mysqli('localhost','root','','store');
	$array = $con->query("select * from site where id='1'");
	$row = $array->fetch_assoc();
	return $row['title'];
}
function siteName()
{	
	$con = new mysqli('localhost','root','','store');
	$array = $con->query("select * from site where id='1'");
	$row = $array->fetch_assoc();
	return $row['name'];
}
function adminName()
{	
	$con = new mysqli('localhost','root','','store');
	$array = $con->query("select * from users where id='$_SESSION[userId]'");
	$row = $array->fetch_assoc();
	return $row['name'];
}function getAdminName($id)
{	
	$con = new mysqli('localhost','root','','store');
	$array = $con->query("select * from users where id='$id'");
	$row = $array->fetch_assoc();
	return $row['name'];
}
function getAllCat()
{	
	$con = new mysqli('localhost','root','','store');
	$array = $con->query("select * from categories");
	while($row = $array->fetch_assoc())
	{
		echo "<option value='$row[id]'>$row[name]</option>";
	}
	
}

 ?>