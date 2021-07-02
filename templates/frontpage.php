<?php include 'inc/header.php'; ?>
          
<div class="jumbotron">
        <h1>Find Record</h1>
        <form method="GET" action="index.php">
            <select name="category" class="form-control">
                <option value="0">Choose Category</option>
                <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category->Category_ID; ?>"><?php echo $category->Category_Name; ?></option>
                <?php endforeach; ?>
            </select>
            <br>
            <input type="submit" class="btn btn-lg btn-success" value="FIND">
        </form>
      </div>
        <h3><b><u><?php echo $title; ?></u></b></h3>
      	<?php foreach($recs as $rec):?>
        <br>
      	<div class="row marketing">
	        <div class="col-md-10">
	          <h4><?php echo $rec->NAME; ?></h4>
	          <p>Crime: <?php echo $rec->CRIME_TYPE; ?> <br>Timestamp: <?php echo $rec->DOA; ?></p>     
	        </div>
	        <div class="col-md-2">
	        		<a class="default" href="Rec.php?id=<?php echo $rec->ID; ?>">View</a>
	        </div>
        </div>  
        <?php endforeach; ?>
        <br><br><br>

<?php include 'inc/footer.php'; ?>