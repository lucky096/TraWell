<?php
class functiona
{

public static function exe($sql)
{
	$cn = mysqli_connect("localhost","root","","trawell")
		or
	die(mysqli_error());

	$result = mysqli_query($cn,$sql);
	return $result;
}
public static function tabledata($sql)
{
	$cn = mysqli_connect("localhost","root","","trawell")
		or
	die(mysqli_error());
	
	$result = mysqli_query($cn,$sql);
	$ar=array();
	$row=array();
	
	if($result)
	{
		while($row=mysqli_fetch_array($result))
		{
			$ar[]=$row;
		}
	}
	return $ar;
}

}
?>