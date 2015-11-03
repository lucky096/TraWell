<?php
//opening page
include("../function.php");

$f = new functiona();

//received values from form
$place=$_POST["place"];
$d_from=$_POST["d_from"];
$d_to=$_POST["d_to"];
$u_name=$_POST["u_name"];;    //<<<<<<<<<we have to change this

//inserting
$sql="insert into plan values ('$u_name', '$place', '$d_from', '$d_to')";
$f->exe($sql);

//searching
$sql="select u.u_name from user u, plan p where ((p.d_from<='$d_from' and p.d_to>'$d_from') or (p.d_from>='$d_from' and p.d_to<='$d_to') or (p.d_from<'$d_to' and p.d_to>='$d_to)) and p.uname=u.uname and p.uname!='$u_name';";
$ar=$f->tabledata($sql);
	
	echo $ar;

//echo $ar;

?>