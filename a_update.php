<?php 
require_once 'dbconnect.php';
if($_POST){
$id=$_POST["media_id"];
$title=$_POST["title"];
$code=$_POST["code"];
$status=$_POST["status"];
$type=$_POST["type"];
$description=$_POST["description"];
$image=$_POST["image"];
$publish_date=$_POST["publish_date"];
$publisher=$_POST["publisher"];
$author=$_POST["author"];
 
  $sql="UPDATE `media` SET `title`='$title',`image`='$image',`code`='$code',`description`='$description',`type`='$type',`publish_date`='$publish_date',`status`='$status',`publisher`='$publisher',`author`='$author' WHERE media_id=$id";
 if(mysqli_query($connect,$sql)){
echo "success <br><a href='ind.php'>Go back to home</a>";
 }else{
 	echo "error";
 }
}

 ?>
