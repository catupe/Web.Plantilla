<div class="row">
	<div class="col-md-12">	
		<form class="form-horizontal" method="POST" action="" id="formulario" name="formulario">
			<div class="form-group {$class_error_fullname}">
				<div class="form-inline">
					<label for="inputEmail3" class="col-sm-2 control-label">Full Name</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="FullName" id="fname" value="{$value_fullname}" aria-describedby="inputSuccess2Status">
						{* validate id="fname" message="Full Name cannot be empty" *}
						{$mensaje_error_fullname}
					</div>
				</div>
			</div>
			<div class="form-group {$class_error_date}">
				<div class="form-inline">
					<label for="inputPassword3" class="col-sm-2 control-label">Date</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Date" id="fdate" value="{$value_date}" placeholder="aaaa/mm/dd">
						{* validate id="fdate" message="Date is not valid" *}
						{$mensaje_error_date}
					</div>
				</div>
			</div>
			<div class="form-group {$class_error_email}">
				<div class="form-inline">
					<label for="inputPassword3" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Email" id="email" value="{$value_email}">
						{* validate id="email" message="Email not valid" *}
						{$mensaje_error_email}
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="form-inline">
					<div class="col-sm-offset-2 col-sm-10">
					  <button type="submit" class="btn btn-primary">Aceptar</button>
					</div>
				</div>
			</div>
		</form>
	</div>
	<div class="col-md-12">	
		{$datos_post_fullname}
		<br>
		{$datos_post_date}
		<br>
		{$datos_post_email}
	</div>
</div>