<?php
require_once 'dbconnect.php' ; 
if($_GET["id"]){

	$id=$_GET["id"];
	$sql="UPDATE `media` SET `status`='reserved' WHERE media_id=$id AND status like 'available' ";

	if(mysqli_query($connect,$sql)){
		echo "reserved  seccesfully <br><a href='ind.php'>back to the home</a>";
	}else{
		echo "this item is reserved before";
	}

}

 ?>