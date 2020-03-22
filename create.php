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
        <li class="active"><a href="ind.php">Back to Home</a></li>
      
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
<div class="card" style="">
  <img src="imgs/m.jfif" class="card-img-top" alt="...">
  <div class="card-body">
  	<form action="a_create.php" method="post" >
  		

    <h2 class="card-title">Title :<input type="text" name="title"></h2>
    <h3 class="card-title">Author :<input type="text" name="author" ></h3>
    <h4 class="card-title">Sur Name :<input type="text" name="sur_name" ></h4>

    <p class="card-text">Description :<input  type="text" name="description"></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Type :<input list="type" name="type">

<datalist id="type">
  <option value="book">
  <option value="cd">
  <option value="dvd">
  
</datalist></li>
    <li class="list-group-item">Image :<input type="text" name="image"></li>
    <li class="list-group-item">Code : <input type="text" name="code"></li>
    <li class="list-group-item">Date : <input type="date" name="publish_date"></li>
    <li class="list-group-item">Status : <input type="text" name="status" ></li>
    <li class="list-group-item">Publisher : <input type="text" name="publisher"></li>
    <li class="list-group-item">Address : <input type="text" name="address"></li>
    <li class="list-group-item">Size : <input list="size" name="size">
<datalist id="size">
  <option value="small">
  <option value="medium">
  <option value="larg">
  
</datalist>
    </li>
  </ul>

  <div class="card-body">
    
    	<button class="btn btn-dark">
    		<input type="submit" text="update"  ></button>
    <a href="create.php" class=""><button type="button" class="btn btn-info">Remove</button></a>

</form>
    
  </div>
</div>
</body>
</html>