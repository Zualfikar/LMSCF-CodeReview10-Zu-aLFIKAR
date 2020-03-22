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
  	<form action="a_update.php" method="post" >
  	<input type="hidden" name="media_id" value="<?php echo $row['media_id'] ?>">	

    <h1 class="card-title"><input type="text" name="title" value="<?php echo $row['title'] ?>"></h1>
    <h3 class="card-title">Author :<input type="text" name="author" value="<?php echo $row['author'] ?>"></h3>

    <p class="card-text">Description :<input  type="text" name="description" value="<?php echo $row['description'] ?>"></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Type : <input type="list" name="type" value="<?php echo $row['type'] ?>"></li>
    <li class="list-group-item">Image : <input type="text" name="image" value="<?php echo $row['image'] ?>"></li>
    <li class="list-group-item">Code : <input type="text" name="code" value="<?php echo $row['code'] ?>"></li>
    <li class="list-group-item">Date : <input type="date" name="publish_date" value="<?php echo $row['publish_date'] ?>"></li>
    <li class="list-group-item">Status : <input type="text" name="status" value="<?php echo $row['status'] ?>"></li>
    <li class="list-group-item">Publisher : <input type="text" name="publisher" value="<?php echo $row['publisher'] ?>"></li>
  </ul>

  <div class="card-body">
    
    	<button class="btn btn-dark">
    		<input type="submit" text="update"  ></button>
    <a href="delete.php?id=<?php echo $row['media_id'] ?>" class=""><button type="button" class="btn btn-info">Delete</button></a>

</form>
    
  </div>
</div>

</div>
</body>
</html>