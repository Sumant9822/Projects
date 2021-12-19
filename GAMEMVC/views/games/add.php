<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Add New Game</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    	<div class="form-group">
    		<label>Game Name</label>
    		<input type="text" name="gname" class="form-control" />
    	</div>
    	<div class="form-group">
    		<label>Game Series</label>
    		<input type="text" name="gseries" class="form-control" />
    	</div>
    	<div class="form-group">
    		<label>Game Space</label>
    		<input type="text" name="gspace" class="form-control" />
    	</div>
		<div class="form-group">
    		<label>Game Developer</label>
    		<input type="text" name="gdeveloper" class="form-control" />
    	</div>
		<div class="form-group">
    		<label>Game Publisher</label>
    		<input type="text" name="gpublisher" class="form-control" />
    	</div>
		<div class="form-group">
    		<label>Game Genres</label>
			<input type="text" name="ggenres" class="form-control" />
    	</div>
    	<input class="btn btn-primary" name="insert" type="submit" value="Submit" />
        <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>games">Cancel</a>
    </form>
  </div>
</div>