<?php
require_once 'dbconnect.php' ;
if($_GET["id"]){
	$id=$_GET["id"];
	$sql="SELECT * FROM media WHERE media_id=$id";
	$result= mysqli_query($connect,$sql);
	$row= $result->fetch_assoc();
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link href="assets/css/style1.css" rel="stylesheet">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 </head>
 <body>
 

<div class="con">

 <!-- USING BOOTSTRAP 3.0.3 -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Library</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav pull-right">
        <li class="active"><a href="ind.php">Home</a></li>
        <li><a href="update.php?id=<?php echo $row['media_id'] ?>">Update</a></li>
        <li><a href="create.php">ADD</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>

<div class="card" style="">
  <img src="<?php echo $row['image'] ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h1 class="card-title"><?php echo $row['title'] ?></h1>
    <h3 class="card-title"><?php echo $row['author'] ?></h3>
    <p class="card-text"><?php echo $row['description'] ?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Type : <?php echo $row['type'] ?></li>
    <li class="list-group-item">Date : <?php echo $row['publish_date'] ?></li>
    <li class="list-group-item">Status : <?php echo $row['status'] ?></li>
    <li class="list-group-item">Publisher : <?php echo $row['publisher'] ?></li>
  </ul>
  <div class="card-body">
    <a href="update.php?id=<?php echo $row['media_id'] ?>" class=""><button type="button" class="btn btn-info">Update</button></a>
    <a href="delete.php?id=<?php echo $row['media_id'] ?>" class=""><button type="button" class="btn btn-info">Delete</button></a>
<a href="book.php?id=<?php echo $row['media_id'] ?>" class=""><button type="button" class="btn btn-info">Booking</button></a>
    
  </div>
</div>
</div>
 </body>
 </html>