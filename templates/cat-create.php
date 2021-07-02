<?php include 'inc/header.php'; ?>
	<h2 class="page-header">Create New Crime Category</h2>
	<form method="post" action="create2.php">
		<div class="form-group">
			<label>Crime</label>
			<input type="text" class="form-control" name="CRIME_TYPE">
		</div>
		
		<br>
		<br>
		
		<input type="submit" class="btn-submit1" value="Submit" name="submit">
	</form>
<?php include 'inc/footer.php'; ?>