<?php 
require_once 'dbconnect.php';
if($_POST){
$title=$_POST["title"];
$code=$_POST["code"];
$type=$_POST["type"];
$description=$_POST["description"];
$image=$_POST["image"];
$publish_date=$_POST["publish_date"];
$publisher=$_POST["publisher"];
$author=$_POST["author"];
 $address=$_POST["address"];
 $size=$_POST["size"];
 $sur_name=$_POST["sur_name"];
 
  $sql1="INSERT INTO media (title,code,type,description,image,publish_date,publisher,author) VALUES ('$title','$code','$type','$image','$description','$publish_date','$publisher','$author')";
  $sql2="INSERT INTO publisher (publisher_name,address,size) VALUES ('$publisher','$address','$size')";
  $sql3="INSERT INTO authoer (author_name,sur_name,media_name) VALUES ('$author','$sur_name','$type')";
  if(mysqli_query($connect,$sql1) && mysqli_query($connect,$sql2) && mysqli_query($connect,$sql3) ){
  	echo "success<br>
     <a href='ind.php'>back to the home</a>
  	";
  }else{
  	echo "error";
  }

}


 ?>