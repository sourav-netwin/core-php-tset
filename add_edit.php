<form class="form-horizontal" method="post">
	<input type="hidden" name="flag" value="<?php echo $flag; ?>">
	<div class="form-group">
		<label class="control-label col-sm-2" for="email">User Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="name">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="email">Email Id</label>
		<div class="col-sm-10">
			<input type="email" class="form-control" name="email">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="email">Phone Number</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="phone">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="email">DOB</label>
		<div class="col-sm-10">
			<input type="date" class="form-control" name="dob">
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-success">Submit</button>
			<button type="button" onclick="window.location='index.php'" class="btn btn-danger">Cancel</button>
		</div>
	</div>
</form>