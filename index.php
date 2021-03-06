<!DOCTYPE html>
<?php
	include 'db.php';
	
	$sql="select * from task";

	
	$rows =$db->query($sql);
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
	<center><h1>TODE LIST</h1></center>
	
	<div class="col-md-10 col-md-offset-1">
	<table class="table">
	<button type="button"  class="btn btn-success"  data-target="#myModal" data-toggle="modal">Add Task</button>
	<button type="button" class="btn btn-default pull-right">Print</button>
	<hr><br>
	
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Task</h4>
      </div>
      <div class="modal-body">
        <form action="add.php" method="POST">
		<div class="form-group">
		<label>Task Name</label>
		<input type="text" required name="task" class="form-control">
		</div>
		<div class="form-group">
		
		<input type="submit" name="send" value="Add Task" class="btn btn-success">
		</div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Task</th>
	  <tr>
  </thead>
  <tbody>
    <tr>
	<?php
		while($row = $rows->fetch_assoc()):
	?>
	
      <th><?php echo $row['id'] ?></th>
      <td class="col-md-10"><?php echo $row['name'] ?></td>
	  <td>
	  <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Edit</a></td>
	  <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
    </tr>
  
  <?php
		endwhile;
	?>
  </tbody>
</table>
</div>
</div>
</div>
</body>
</html>