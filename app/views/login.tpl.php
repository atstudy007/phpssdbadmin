<div class="panel panel-primary" style="max-width: 400px; margin: 10px auto;">
	<div class="panel-heading">
		<h3 class="panel-title">Login</h3>
	</div>
	<div class="panel-body">

	<?php if($errmsg){ ?>
	<div class="alert alert-danger">
        <strong>Error！</strong> <?=$errmsg?>
	</div>
	<?php } ?>

	<form method="post">
		<div class="form-group">
			<input autofocus="autofocus" class="form-control" name="name" placeholder="User Name" required="required" type="text" value="" />
		</div>
		<div class="form-group">
			<input autocomplete="off" class="form-control" name="password" placeholder="Password" required="required" type="password" value="" />
		</div>

		<div class="form-group">
			<input class="btn btn-lg btn-success btn-block" type="submit" value="Login" />
		</div>
	</form>

	</div>
</div>
