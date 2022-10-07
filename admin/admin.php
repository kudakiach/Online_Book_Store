<?php
	$title = "Administration section";
	require_once "./template/head.php";
	require_once "./template/menu.php";
?>
	<div class="row mt-5">
		<div class="col-md-6 offset-md-3 box">
			<h4>Login Area</h4>
			<form class="form-horizontal" method="post" action="admin_verify.php">
		<div class="form-group">
			<label for="name" class="control-label col-md-4">Name</label>
			<div class="col-md-8">
				<input type="text" name="name" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="pass" class="control-label col-md-4">Pass</label>
			<div class="col-md-8">
				<input type="password" name="pass" class="form-control">
			</div>
		</div>
		
		<div class="form-group">
			
			<div class="col-md-8">
				<input type="submit" name="submit" class="btn btn-success col-md-12" value="Login">
			</div>
		</div>
	</form>
		</div>
	</div>
	

<?php
	require_once "./template/footer.php";
?>