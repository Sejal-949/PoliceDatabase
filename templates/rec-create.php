<?php include 'inc/header.php'; ?>
	<h2 class="page-header">Create New Record</h2>
	<form method="post" action="create.php">
		<div class="form-group">
			<label>NAME</label>
			<input type="text" class="form-control" name="NAME">
		</div>
		<br>
		<div class="form-group">
			<label>Crime</label>
			<select class="form-control" name="CRIME_TYPE">
				<option value="0">Choose Category</option>
                <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category->Category_Name; ?>"><?php echo $category->Category_Name; ?></option>
                <?php endforeach; ?>
			</select>
		</div>
		<br>
		<br>
		<input type="submit" class="btn-submit2" value="Submit" name="submit">
	</form>
<?php include 'inc/footer.php'; ?>