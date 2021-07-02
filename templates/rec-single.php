<?php include 'inc/header.php'; ?>
	<h2 class="page-header"><?php echo $rec->NAME; ?></h2>
	<hr>
	<ul class="list-group">
		<li class="list-group-item"><strong>Crime:</strong> <?php echo $rec->CRIME_TYPE; ?></li>
		<li class="list-group-item"><strong>Date of Admission:</strong> <?php echo $rec->DOA; ?></li>
		
	</ul>
	<br><br>
	<div class ="page">
	<a href="index.php">Go Back</a>
	</div>
	<br><br>
	<div class="well">
			<a href="edit.php?id=<?php echo $rec->ID; ?>" class="btn btn-default">Edit</a> 

			<form style="display:inline;" method="post" action="Rec.php">
				<input type="hidden" name="del_id" value="<?php echo $rec->ID; ?>">
				<input type="submit" class="btn btn-danger" value="Delete">
			</form>
	</div>

<?php include 'inc/footer.php'; ?>