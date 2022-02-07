<!DOCTYPE html>
<?php
	include 'db.php';
	$id =$_GET['id'];
	$sql="select * from task where id='$id'";
	
	$rows =$db->query($sql);
	
	$row=$rows->fetch_assoc();
	if(isset($_POST['send'])){
		
	$task = $_POST['task'];
	$sql2 ="update task set name='$task' where id = '$id' ";
	
	$db->query($sql2);
	
	header("Location: index.php");
	}
	?>

<html>
<head>
<title>CRUD App</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</head>
<body>

<div class="container">
<div class="row style="margin-top:70px;">
	<center><h1>UPDATE LIST</h1></center>
	
	<div class="col-md-10 col-md-offset-1">
	<table class="table">
	<hr><br>
	

        <form method="POST" >
		<div class="form-group">
		<label>Task Name</label>
		<input type="text" required name="task"  value="<?php echo $row['name'];?> "class="form-control">
		</div>
		<div class="form-group">
		
		<input type="submit" name="send" value="Add Task" class="btn btn-success">
		</div>
		</form>
       
</div>
</div>
</div>

</body>
</html>