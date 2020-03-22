<?php
require_once 'dbconnect.php' ; 
if($_GET["id"]){

	$id=$_GET["id"];
	$sql="DELETE  FROM media WHERE media_id=$id";

	if(mysqli_query($connect,$sql)){
		echo "deleted seccesfully<a href='index.php'>back to the home</a>";
	}else{
		echo "error";
	}

}

 ?>